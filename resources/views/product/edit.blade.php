@extends('layouts.manufacture.app')

@section('product_edit')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">編集ページ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    <div class="table-responsive">
    <form action="{{ route('product_update') }}" method="post">
                    @csrf
                        <table class="table table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>項目</th>
                                    <th>登録内容</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{__('ブランド名')}}</td>
                                    <td><input type="text" name="brand" value="{{old( 'brand', $product->brand )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('商品名')}}</td>
                                    <td><input type="text" name="product_name" value="{{old( 'product_name', $product->product_name )}}"></td>
                                </tr>    
                                <!-- <tr>
                                    <td>{{__('商品カテゴリー')}}</td>
                                    <td><input type="text" name="category" value="{{old( 'category', $product->category )}}"></td>
                                </tr> -->
                                <tr>
                                    <td>{{__('販売上代(税込)')}}</td>
                                    <td><input type="text" name="price" value="{{old( 'price', $product->price )}}"></td>
                                </tr>
                                <tr>
                                    <td>{{__('カラー/サイズ')}}</td>
                                    <td><input type="text" name="size" value="{{old( 'size', $product->size )}}"></td>
                                </tr>
                                <!-- <tr>
                                    <td>{{__('メーカー名')}}</td>
                                    <td><input type="text" name="manufacture_id" value="{{old( 'manufacture_id', $product->manufacture_id )}}"></td>
                                </tr> -->

                                <tr>
                                    <td>{{__('画像１')}}</td>
                                    <td>
                                    <input id="image1" type="file" class="form-control @error('image1') is-invalid @enderror" name="image1" required autocomplete="image1" value="{{old( 'image1', $product->image1 )}}">

                                    @error('image1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>{{__('画像２')}}</td>
                                    <td>
                                    <input id="image2" type="file" class="form-control @error('image2') is-invalid @enderror" name="image2" required autocomplete="image2" value="{{old( 'image1', $product->image2 )}}">

                                    @error('image2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>{{__('画像３')}}</td>
                                    <td>
                                    <input id="image3" type="file" class="form-control @error('image3') is-invalid @enderror" name="image3" required autocomplete="image3" value="{{old( 'image3', $product->image3 )}}">

                                    @error('image3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>{{__('画像４')}}</td>
                                    <td>
                                    <input id="image4" type="file" class="form-control @error('image4') is-invalid @enderror" name="image4" required autocomplete="image4" value="{{old( 'image4', $product->image4 )}}">

                                    @error('image4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>{{__('商品説明')}}</td>
                                    <td><input type="text" name="product_coment" value="{{old( 'product_coment', $product->product_coment )}}"></td>
                                </tr> 
                                <tr>
                                    <td>{{__('成分・原材料')}}</td>
                                    <td><input type="text" name="composition" value="{{old( 'composition', $product->composition )}}"></td>
                                </tr>
                                <tr>
                                    <td>{{__('オフィシャルHP')}}</td>
                                    <td><input type="text" name="official_hp" value="{{old( 'official_hp', $product->official_hp )}}"></td>
                                </tr>
                                <tr>
                                    <td>{{__('オフィシャルInstagram')}}</td>
                                    <td><input type="text" name="official_instagram" value="{{old( 'official_instagram', $product->official_instagram )}}"></td>
                                </tr>   
                            </tbody>
                        </table>

                        <input type='hidden' name='id' value='{{ $product->id }}'><br>
                        <button class="btn btn-primary" type='submit'>変更</button>
                        <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
                    </form> 
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>                   
@endsection