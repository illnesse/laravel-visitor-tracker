<?php

namespace Voerro\Laravel\VisitorTracker\Geoip;

class Userinfo extends Driver
{
    protected function getEndpoint($ip)
    {
        return "https://api.userinfo.io/userinfos?ip_address={$ip}";
    }

    public function latitude()
    {
        return ($this->data) ? $this->data->position->latitude : null;
    }

    public function longitude()
    {
        return ($this->data) ? $this->data->position->longitude : null;
    }

    public function country()
    {
        return ($this->data) ? $this->data->country->name : null;
    }

    public function countryCode()
    {
        return ($this->data) ? $this->data->country->code : null;
    }

    public function city()
    {
        return ($this->data) ? $this->data->city->name : null;
    }
}
