<?php

echo serialize(true);
echo $str = serialize(false); //wrong

class serial{

    private $id, $amount, $descripion, $creditcard;

    public function __construct()
    {
        $this->id = 0;
        $this->amount = 0;
        $this->descripion = 0;
        $this->creditcard = 0;
    }
     
    public function __sleep():array
    {
        return ['id', 'amount'];
    }

    public function __wakeup():void
    {
        
    }

    public function __serialize(): array
    {
        return ['id'=>$this->id,
            'amount'=>$this->amount,
            'description' =>$this->descripion, 
            'creditcard' =>base64_encode($this->creditcard),  
    ];
    }

    public function __unserialize(array $data): void
    {
        $this->data = $data['id'];
        $this->amount = $data['amount'];
        $this->descripion = $data['description'];
        $this->creditcard = base64_decode($data['amount']);

        var_dump($data);
    }
    
}

// main program

$object = new serial;
$str = serialize($object);
echo "\n". $str . "\n";
unserialize($str);