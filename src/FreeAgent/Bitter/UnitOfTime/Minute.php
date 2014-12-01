<?php

namespace FreeAgent\Bitter\UnitOfTime;

class Minute extends AbstractUnitOfTime implements UnitOfTimeInterface
{
    public function getDateTimeFormated()
    {
        return sprintf('%s-%s-%s-%s-%s', $this->getDateTime()->format('Y'), $this->getDateTime()->format('m'), $this->getDateTime()->format('d'), $this->getDateTime()->format('H'), $this->getDateTime()->format('i'));
    }
}
