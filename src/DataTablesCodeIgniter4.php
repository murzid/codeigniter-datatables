<?php

namespace Murzid\CodeIgniterDataTables;

class DataTablesCodeIgniter4 extends DataTables
{
    public function __construct($queryBuilder)
    {
        parent::__construct($queryBuilder, '4');
    }
}
