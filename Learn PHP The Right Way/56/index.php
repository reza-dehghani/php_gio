 <?php

//  require_once __DIR__ . '/../vendor/autoload.php';

use App\InvoiceCollection;
use Ramsey\Uuid\Type\Integer;

 require_once './class/invoice.php';
 require_once './class/InvoiceCollection.php';


 foreach(new Invoice(25) as $key => $value)
 {
     echo $key  . '='   . $value    .   PHP_EOL;
 }

$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);

foreach ($invoiceCollection as $invoice)
{
    var_dump($invoice);
    echo $invoice->$id   .   '-' . $invoice->amount  .   PHP_EOL;
}

 ?>