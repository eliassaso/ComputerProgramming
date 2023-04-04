<form action="{{ route('customer.store') }}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name" id="">
    <br>
    <br>
    <label>Last Name</label>
    <input type="text" name="last_name" id="">
    <br>
    <br>
    <label>Phone</label>
    <input type="text" name="phone" id="">
    <br>
    <br>
    <input type="submit" value="Send">
</form>