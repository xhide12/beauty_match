@extends('layouts.common')

@section('product_delete')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">削除画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    <div class="table-responsive">
    <form action="{{ route('product_remove') }}" method="post">
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
                                    <td>{{__('ブランド')}}</td>
                                    <td><input type="text" name="brand" value="{{old( 'brand', $product->brand )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('商品名')}}</td>
                                    <td><input type="text" name="product_name" value="{{old( 'product_name', $product->product_name )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('商品カテゴリー')}}</td>
                                    <td><input type="text" name="category" value="{{old( 'category', $product->category )}}"></td>
                                </tr>
                                <tr>
                                    <td>{{__('販売価格(税込)')}}</td>
                                    <td><input type="text" name="price" value="{{old( 'price', $product->price )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('manufacture_id')}}</td>
                                    <td><input type="text" name="manufacture_id" value="{{old( 'manufacture_id', $product->manufacture_id )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('カラー名')}}</td>
                                    <td><input type="text" name="size" value="{{old( 'size', $product->size )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('画像1')}}</td>
                                    <td><input type="text" name="image1" value="{{old( 'image1', $product->image1 )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('画像2')}}</td>
                                    <td><input type="text" name="image2" value="{{old( 'image2', $product->image2 )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('画像3')}}</td>
                                    <td><input type="text" name="image3" value="{{old( 'image3', $product->image3 )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('画像4')}}</td>
                                    <td><input type="text" name="image4" value="{{old( 'image4', $product->image4 )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('商品コメント')}}</td>
                                    <td><input type="text" name="product_coment" value="{{old( 'product_coment', $product->product_coment )}}"></td>
                                </tr> 
                                <tr>
                                    <td>{{__('成分表')}}</td>
                                    <td><input type="text" name="composition" value="{{old( 'composition', $product->composition )}}"></td>
                                </tr>
                                <tr>
                                    <td>{{__('公式サイト')}}</td>
                                    <td><input type="text" name="official_hp" value="{{old( 'official_hp', $product->official_hp )}}"></td>
                                </tr>
                                <tr>
                                    <td>{{__('Instagram')}}</td>
                                    <td><input type="text" name="official_instagram" value="{{old( 'official_instagram', $product->official_instagram )}}"></td>
                                </tr>   
                            </tbody>
                        </table>

                        <input type='hidden' name='id' value='{{ $product->id }}'><br>
                        <button class="btn btn-danger" type='submit'>削除</button>
                        <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
                    </form> 
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>                   
@endsection