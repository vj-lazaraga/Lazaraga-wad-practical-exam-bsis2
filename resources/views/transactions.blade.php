<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTIONS PAGE</title>
</head>
<body>
    <h1>TRANSACTIONS PAGE</h1>

    <form action= "{{route('createTransaction') }}" method="GET">
        <button type= "submit">Create Transaction</button>
    </form>

    @foreach ($transactions as $transaction)
    <div>Transaction_title:{{ $transaction->transaction_title}}</div>  
    <div>Description:{{ $transaction->description}}</div>
    <div>Status:{{ $transaction->status}}</div>
    <div>Total_amount:{{ $transaction->total_amount}}</div>
    <div>Transaction_number:{{ $transaction->transaction_number}}</div>
    

    <form action="{{ route('deleteTransaction', ['id' => $transaction->id]) }}" method= "POST" 
        onsubmit= "return confirm('Are you sure you want to delete this transaction?')">
        @method ('DELETE')
        @csrf
        <button type="submit">Delete Transaction</button>
    </form>

    <form action="{{ route('editTransaction', ['id' => $transaction->id]) }}" method="GET">
        <button type="submit">
            Edit Transaction
        </button>
    </form>

    <form action="{{ route('viewTransaction', ['id' => $transaction->id]) }}" method="GET">
        <button type="submit">
            View Transaction
        </button>
    </form>
    <hr>
     @endforeach

</body>
</html>