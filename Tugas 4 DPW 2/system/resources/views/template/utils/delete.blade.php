<form action="{{url('produk', $produk->id)}}" method="post" class="form-inline" onsubmit="return confirm('Apa Anda Ingin Menghapus nya?')">
     @csrf
     @method("delete")
  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
 </form>