<div>
    <h1>user form</h1>
    <form action="adduser" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name" />
        <input type="text" name="email" placeholder="Enter Email" />
        <input type="text" name="phone" placeholder="Enter phone" />
        <button>Add New User</button>
    </form>

    {{-- {{ $req }} --}}
</div>
