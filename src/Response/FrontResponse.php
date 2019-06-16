<?php

namespace Khenop\Response;

class FrontResponse
{
    /**
     * Balance Model
     *
     * @var \Khenop\Response\Model\Balance
     */
    private $balance;

    /**
     * Permission Model
     *
     * @var \Khenop\Response\Model\Permission
     */
    private $permission;

    /**
     * Pofile Model
     *
     * @var \Khenop\Response\Model\Profile
     */
    private $profile;

    public function __construct($data)
    {
        $this->balance = new \Stelin\Response\Model\Balance($data->balance);
        $this->permission = new \Stelin\Response\Model\Permission($data->permissions);
        $this->profile = new \Stelin\Response\Model\Profile($data->profile);
    }

    /**
     * Get balance Model
     *
     * @return \Khenop\Response\Model\Balance
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Get balance Model
     *
     * @return \Khenop\Response\Model\Permission
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Get balance Model
     *
     * @return \Khenop\Response\Model\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
