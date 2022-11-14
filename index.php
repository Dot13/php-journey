<?php
    echo "Welcome to PHPSandbox\n";
    echo "\n";
    echo "For Loop:\n";
    for($i = 1; $i <= 5; $i++) {
        echo  " iteration: ${i}" ."\n";
    }

    echo "\n";
    echo "Foreach Loop:\n";
    $k_array = [1,2,3,4,5,6];
    $sum = 0;
    foreach($k_array as $k) {
        echo "${sum} + ${k} = ";
        $sum += $k;
        echo  "${sum}" ."\n";
    }

    echo "\n\n";
    echo "While Loop:\n";
    $j = 6;
    while ((--$j)) {
        echo  " iteration: ${j}" ."\n";
    }

    echo "\n\n";
    echo "Array:\n";
    $person = [
        "first_name" => "Dot",
        "last_name" => "Ngcani",
        "cell" => "0842841699"
    ];
    echo "  ". json_encode($person);


    // echo "\n\n";
    // echo "Classes:\n";
    // class Vehicle {
    //     public __construct Vehicle($make, $model, $year) {
    //         $this->$make = $make;
    //         $this->$model = $model;
    //         $this->$year = $year;
    //     }
    //     protected function details() {
    //         return  [
    //              "make" => $this->$make,
    //              "model" =>$this->$model , 
    //              "year" => $this->$year
    //          ];
    //     }
    // }
    // class BatMobile extends Vehicle {
    //      public function start_engine(){
    //          echo "Bat-Mobile: ". json_encode($this->details) . "... engine started... \n"
    //      }
    // }

    // class AutoBot extends Vehicle {
    //      public function start_engine(){
    //          echo "Auto-Bot: ". json_encode($this->details) . "... engine started... \n"
    //      }
    // }

    // $bat_mobil = new BatMobile("Night Crawler", "Flying Dutchman Bike", 2006);
    // $bumble_b = new AutoBot("Chev", "Bumble Prime", 2022);

    // echo "  " . json_encode($bat_mobil);
    // echo "  " . json_encode($bumble_b);