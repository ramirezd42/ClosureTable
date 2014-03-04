<?php

class {{entity_class}} extends \Franzose\ClosureTable\Models\Entity implements {{entity_class}}Interface {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = '{{entity_table}}';

    /**
     * ClosureTable model instance.
     *
     * @var {{closure_class}}
     */
    protected $closure = '{{closure_class}}';
}