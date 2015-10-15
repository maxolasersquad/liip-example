<?php
namespace AppBundle\Entity;

class Bar extends Foo
{
    private $status;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return $this
     */
    public function setStatus( $status )
    {
        $this->status = $status;

        return $this;
    }
}
