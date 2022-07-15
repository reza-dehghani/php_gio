 <?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Invoice;
use App\InvoiceCollection;


//  foreach(new Invoice(25) as $key => $value)
//  {
//      echo $key  . '='   . $value    .   PHP_EOL;
//  }

$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);

foreach ($invoiceCollection as $invoice)
{
    // echo($invoice);
    echo $invoice->id   .   '-' . $invoice->amount  .   PHP_EOL;
}

foo($invoiceCollection);

function foo(iterable $iterable)
{
    foreach($iterable as $i => $item)
    {
        echo $i . PHP_EOL;
    }
}
 ?>