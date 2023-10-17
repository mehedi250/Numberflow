# Numberflow

I create laravel package for number (integer, float) oparation 


## How to install package

In your laravel project composer.json file. Open the file and update include the following array somewhere in the object:

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/mehedi250/Numberflow"
        }
    ]


Execute the following command to install the package:

  composer require mehedi250/numberflow:master


## How to use & code

Add bellow line in php file

    use Mehedi250\Numberflow\NumberFlow; 



For remove extra zero from float number-

        $number = 4.670000;
        $newNumber = NumberFlow::removeExtraZero($number);  // output:  4.67


For make number in a fix decimal point  number-

        $number = 4.36455;
        $newNumber = NumberFlow::fixDecimalPoint($number, 2);  // output:  4.36



### Example
        <?php
        
        namespace App\Http\Controllers;
        
        use Illuminate\Http\Request;
        
        use Mehedi250\Numberflow\NumberFlow; 
        
        class MathController extends Controller
        {
            public function index()
            {
                $NumberFlow = new NumberFlow;
        
                $number = 4.670000;
                $newNumber = $NumberFlow->removeExtraZero($number); 
        
                $targetNumber = 4.63210;
                $result = $NumberFlow->fixDecimalPoint($targetNumber, 4); 
        
                //your code ..
            }
        }
