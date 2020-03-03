<h1>Edit Customer Detail</h1>

<div>
    <a href="/customers/{{$customer -> id }}">Back</a>
</div>

<form action="/customers/{{$customer->id }}" method="post">

    @method('PATCH')
    <div>
        <lable for="name">Name</lable>
        <input type="text" name="name" id="" autocomplete="off" value="{{$customer->name}}">
        @error('name')<p style="color: red">{{$message}}</p> @enderror
    </div>

    <div>
        <lable for="email">Email</lable>
        <input type="text" name="email" id="" autocomplete="off" value="{{$customer->email}}">
        @error('email')<p style="color: red">{{$message}}</p> @enderror
    </div>

    <div>
        <lable for="note">Note</lable>
        <textarea type="text" name="note" id="" autocomplete="off" >{{$customer->note}}</textarea>
    </div>

    @csrf

    <button>Save Customer</button>
</form>
