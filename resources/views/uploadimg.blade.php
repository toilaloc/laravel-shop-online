<form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
@csrf
    <input type="file" name="hinh">
<button type="submit">Upload</button>
</form>
