<!DOCTYPE html>
<html>
    <head>
        <title>My php page</title>
    </head>
    <body>
        <?php print('Hello World!!!'); ?>
        <?php
            $values = array('hi'=>5, 'bye'=>6, 'boy' => array('apple'=>'red', 'banana'=> yellow), 5); var_dump($values); echo $values['0'] . " ";
            class dog
            {
                private $name = 'SparkyMan';
                function bark() {
                    print("bark bark"." ");
                }

                /**
                 * @return string
                 */
                public function getName()
                {
                    echo $this->name;
                }
            }
            $sparky = new dog;
            $sparky->bark();
            $sparky->getName();
        ?>

    </body>
</html>
