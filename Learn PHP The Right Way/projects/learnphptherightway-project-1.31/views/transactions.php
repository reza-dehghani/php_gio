<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check #</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <!-- SHOW DATEEEEEEEE -->
                <?php
                for($i=0 ; $i < count($description); $i++)
                { ?>
                    <tr>
                    <?php 
                    $date[$i] = strtotime ( $date[$i] );
                    ?>
                    <td>
                    <?php
                    if($date[$i] != NULL) 
                        echo date( 'M d,Y' , $date[$i] );
                    ?>
                    </td>
                    <td> <?php  if(isset($check[$i]))  echo $check[$i];?></td>
                    <td> <?php  if(isset($description[$i]))  echo $description[$i];?></td>
                    <td> <?php $amount[$i] = str_replace("$", "", $amount[$i]);
                                if($amount[$i] > 0)
                                {
                                    array_push($income, $amount[$i]);
                                    echo "<span style='color:green'>".$amount[$i]."</span>";
                                }
                                    elseif($amount[$i] < 0)
                                    {
                                        array_push($expense, $amount[$i]);
                                        echo "<span style='color:red'>".$amount[$i]."</span>";    
                                    }
                    ?></td>
                    <?php } ?>

                    </tr>
                    <!-- SHOW DATEEEEEEEE -->
                    
        </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td>
                        <?php echo array_sum($income)?>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td>
                    <?php echo array_sum($expense)?>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td>
                        <?php
                            echo array_sum($income)+array_sum($expense);
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>