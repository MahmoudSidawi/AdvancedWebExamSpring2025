@extends('layouts.app')

@section('title','Search')

@section('content')
<h1 class="text-center text-2xl font-bold mb-8">Students List</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
<div class="flex justify-center mb-8">
    <div class="w-full max-w-md">
        <div class="relative">
            <input type="search" id="search" name="search" class="form-control rounded w-full px-4 py-2" placeholder="Search Students" />
        </div>
    </div>
</div>
<ul class="bg-white shadow-md rounded-lg p-4" id='mycard'>
 
</ul>
<script>
    $(document).ready(function () {
        $('#search').on('keyup', function(){
            var value = $(this).val();
            fill(value);
        });

        function fill(value=''){
            $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function (data) {
                    console.log(data);
                    $('#mycard').html(data);
                }
            });
        }
        fill();
    });

</script>

@endsection
