<?php

namespace Krisn\HowToPay\Repositories;

use Krisn\HowToPay\Data\PaymentData;

class HowToPay
{

    /**
     * data
     *
     * @var array
     */
    protected $data;



    function __construct()
    {
        $this->data = PaymentData::get();
    }
    
    /**
     * Get pay list with icon
     *
     * @return array
     */
    public function payMethods(): array
    {
        $result = [];
        foreach ($this->data as $key => $item) {
            $result[] = (object)$this->getData($item);
        }
        return $result;
    }

    /**
     * Get pay list with icon
     *
     * @return array
     */
    public function payMethodGroups(): array
    {
        $result = [];
        $items  = [];
        foreach ($this->data as $key => $item) {
            $items[$item['type']][] = (object)$this->getData($item);
            $result[$item['type']] = (object)[
                "label" => $item['label'],
                "items" => $items[$item['type']]
            ];
        }

        return $result;
    }

    /**
     * Get how to pay by payment method 
     *
     * @param string $payMethod
     * @return array
     */
    public function howToPay(string $payMethod): array
    {
        $data = array_values(array_filter($this->data, function($item) use ($payMethod){
            return ($item['id'] === $payMethod);
        }));
        
        if (count($data)) {
            return $data[0]['instructions'];
        }
        return [];
    }

    /**
     * Preparing data
     *
     * @param array $data
     * @return array
     */
    public function getData(array $data): array
    {
        return [
            "id"     => $data['id'],
            "name"   => $data['name'],
            "method" => $data['method'],
            "icon"   => asset('vendor/howtopay/banks/icons/'.ucfirst($data['icon']).'.png'),
        ];
    }

}
