<a href="{{ url('customer/create') }}">Create</a>
</br>

@foreach($customers as $customer)

<article>
    <tr>
        <td>
            <h4> {{ $customer->name }} </h4>
        </td>
        <td>
            <h4> {{ $customer->last_name }} </h4>
        </td>
        <td>
            <h4> {{ $customer->phone }} </h4>
        </td>
    </tr>
    **************************
</article>

@endforeach