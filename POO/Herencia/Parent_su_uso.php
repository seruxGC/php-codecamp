<?php

/**
 * Instead of using the literal name of the base class in your code, you
 *  should be using the special name parent, which refers to the name of
 * your base class as given in the extends declaration of your class.
 *
 * By doing this, you avoid using the name of your base class in more than one place.
 *
 * Should your inheritance tree change during implementation, the change is
 *  easily made by simply changing the extends declaration of your class.
 */

class A
{
    public function example()
    {
        echo "I am A::example() and provide basic functionality.<br />\n";
    }
}

class B extends A
{
    public function example()
    {
        echo "I am B::example() and provide additional functionality.<br />\n";
        parent::example();
    }
}

$b = new B;

// This will call B::example(), which will in turn call A::example().
$b->example();
