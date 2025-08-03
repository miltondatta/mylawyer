<?php

namespace App\Exports\SuperAdmin;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomersExport implements FromArray, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $customers;
    public function __construct($customers)
    {
        $this->customers = $customers;
    }
    public function array(): array
    {
        $data = [];
        foreach ($this->customers as $customer) {
            $single = [$customer->id, $customer->name, $customer->description, $customer->is_active, date_format($customer->created_at, 'd-m-Y')];
            $data[] = $single;
        }
        return $data;
    }
    public function headings(): array
    {
        return ["id", "name", "description", "is_active", "created_at"];
    }
}
