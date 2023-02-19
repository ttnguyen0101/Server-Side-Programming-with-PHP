<!DOCTYPE html>
<html>
<head>
<title>Investment Calculator</title>
<style>
    td, th { text-align: right }
    td {padding:4px; width: 110px; }
    tr:nth-child(even) {background-color: #e5e5e5; }
    tr {border-bottom:1px solid #cccccc; }
    .year {width:30px;}
</style>
</head>
<body>
    <h1>Simple Investment Calculator</h1>
    <?php
    setlocale(LC_MONETARY,"en_US");
    // TODO: Study the following example reading in the value for the initial amount. Use this example to read in the other values in the next steps.
    $newamount = $_POST['amount'];

    // TODO: Read in the "rate" from the post. Assign it to $rate. 
    $rate = $_POST['rate'];

    // TODO: Read in the number of years "years". Create a new variable and assign the "years" value to it.
    $years = $_POST['years'];

    // TODO: Read in "extra" from the post. Create a new variable and assign the "extra" value to it.
    $extra = $_POST['extra'];

    // TODO: Read in "addamount" from the post. Create a new variable and assign the "addamount" value to it.
    $addamount = $_POST['addamount'];

    ?>
    <h3>Investment Details</h3>
    <?php
    // TODO: Display the values that you read in from above: amount, rate, years, addamount, and extra.
    echo ('Amount: '); printf ( "$%.02f" , $newamount );
    echo ('<br>' . 'Rate: ' . $rate . '%');
    echo ('<br>' . 'Years: ' . $years);
    echo ('<br>' . 'Add amount: ' . $addamount);
    echo ('<br>' . 'Extra: '); printf ( "$%.02f" , $extra );
    ?>
    <h3>Annual Schedule</h3>
    <table>
        <tr>
            <th>Year</th>
            <th>Start Amount</th>
            <th>Interest</th>
            <th>End Amount</th>
            <th>Extra Amount</th>
            <th>New Amount with Extra</th>
        </tr>
    <?php
    // TODO: modify the loop, so it only loops for the number of years invested. 
    $totalInterest = 0;
    $totalExtra = 0;
    $startamount;
    $amountWithExtra;

    for ($x=0; $x<$years; $x++) {
        // TODO: if "addamount" is equal to "Yes", add the amount from "extra" to $newamount.
        if ($addamount == "No") {
            $startamount = $newamount;
            $interest = $startamount * ($rate/100);
            $newamount = $startamount + $interest;

        } elseif ($addamount == "Yes") {
            if ($x == 0) {
                $startamount = $newamount;
                $interest = $startamount * ($rate/100);
                $newamount = $startamount + $interest;
                $amountWithExtra = $newamount + $extra;
            } else {
                $startamount = $amountWithExtra;
                $interest = $amountWithExtra * ($rate/100);
                $newamount = $amountWithExtra + $interest;
                $amountWithExtra = $newamount + $extra;
            }
            
        }
        //total Interest
        $totalInterest += $interest;
        //total Extra
        $totalExtra += $extra;
    
    ?>
    <tr>
        <td class="year"><?php echo ($x+1); ?>
        <td><?php printf ( "$%.02f" , $startamount ); ?></td>
        <td><?php printf ( "$%.02f" , $interest ); ?></td>
        <td><?php printf ( "$%.02f" , $newamount ); ?></td>
        <!-- TODO: if "addamount is equal to "Yes", display two additional columns: the extra amount and the $newamount after adding the extra. -->
        <td><?php ($addamount == "Yes") ? printf ( "$%.02f" , $extra ) : print('N/A'); ?></td>
        <td><?php ($addamount == "Yes") ? printf ( "$%.02f" , $amountWithExtra ) : print('N/A'); ?></td>
    
    <?php
    }
    // TODO: For 2 extra credit points: Add a summary that includes amount invested, total interest earned, total extra amount added, and the final amount.
    echo ('Amount Invested: '); printf ( "$%.02f" , $startamount );
    echo ('<br>' . 'Total Interest Earned: '); printf ( "$%.02f" , $totalInterest );
    echo ('<br>' . 'Total Extra: '); printf ( "$%.02f" , $totalExtra );
    echo ('<br>' . 'Final Amount: '); 
    if ($addamount == "Yes") {
        printf ( "$%.02f" , $amountWithExtra );
    } else {
        printf ("$%.02f" , $newamount);
    } ;
    ?>
    <input type=button value="Return to Calculator" onClick="document.location.href='http://localhost/lab/lab5/index.php'">
</body>
</html>