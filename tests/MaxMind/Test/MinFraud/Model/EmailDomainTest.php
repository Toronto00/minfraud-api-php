<?php

namespace MaxMind\Test\MinFraud\Model;

use MaxMind\MinFraud\Model\EmailDomain;
use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
class EmailDomainTest extends TestCase
{
    public function testEmailDomain()
    {
        $array = [
            'first_seen' => '2017-01-02',
        ];
        $email = new EmailDomain($array);

        $this->assertSame(
            $array['first_seen'],
            $email->firstSeen,
            'firstSeen'
        );
    }
}
