<!DOCTYPE html>
<html>
    <body>
        <h1>My PHP Learning</h1>

        @php
            echo "Hello World<br>";

            //variable
            $color = "Green";
            echo "My favourite color is $color<br>";

            $x = 5; //global scope variable . doesn't work inside a function
            $y = 4;
            echo "The sum of $x and $y is $x+$y<br>"; //gives output 5+4
            //echo"The sum of $x and $y is".$x+$y.;
            $sum = $x+$y;
            //echo "Sum:". $x+$y; shows error
            echo "Sum:$sum"; // global scope variables work outside

            function sum(){
                $sum = $x+$y;
                echo "Sum_inside_function $sum";
            }
            //sum(); //gives error. says x is undefined

            function digit_print(){
                $local_scope_var = 10;
                echo "var inside function: $local_scope_var<br>"; //works
            }
            //echo $local_scope_var; //gives error
            digit_print();
            //local vars can have same name in different functions

            $m = 5;
            $n=10;
            //to access global vars form within a function
            function sum2(){
                global $m,$n;
                $n = $m+$n;
                //echo "global vars accessed from inside the function $n<br>";
            }
            sum2();
            echo $n;
            //global is not working!!!!
    echo "<br>";
            function static_var(){
                static $x = 0;
                echo $x;
                $x++;
            }
            static_var();
            static_var();
            static_var(); //static lets increment the value of x. or else it gives 0 each time

            //data type
            var_dump($x); //gives data type and value

            //php object
            class Dress{
                public $clr; //one property
                function Dress_color($color){ //one method
                    $this->clr = $color;
                    return $this->clr;
                }
            }
            $mydresscolor = new Dress();
            echo $mydresscolor -> Dress_color("red");
            //does java allow same method name as class?
            //oh i found out php also doesn't allow in new versions
        @endphp
    </body>
</html>