<?php

class Domain extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'domains';



    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }



}
