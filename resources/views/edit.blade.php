<div>
    <form action="/edit" method="post">
        @csrf

        <input type="text" name="id" placeholder="Enter id" value="{{ $student->id }}">
        <input type="text" name="name" placeholder="Enter Name" value="{{ $student->name }}">
        <input type="text" name="email" placeholder="Enter Email" value="{{ $student->email }}">
        <input type="text" name="phone" placeholder="Enter phone" value="{{ $student->phone }}">
        <button>Update</button><a href="/list">Cancel</a>
    </form>
</div>
