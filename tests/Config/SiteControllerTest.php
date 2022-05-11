<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Thangphu\UnLock\Controllers\SiteController;

class SiteControllerTest extends TestCase
{
    /**
     * @dataProvider numberDataProvider
     * @return void
     */
    public function testSum($params, $expected)
    {
        $sumtest = new SiteController();
        $result = $sumtest->sum($params['number1'], $params['number2']);
        $this->assertEquals($expected, $result);
    }

    /**
     * @return array[]
     */
    public function numberDataProvider(): array
    {
        return [
            'case-with-number-is-one' => [
                'params' => [
                    'number1' => 1,
                    'number2' => 1
                ],
                'expected' => 2
            ],
            'case-with-number-is-zero' => [
                'params' => [
                    'number1' => 0,
                    'number2' => 1
                ],
                'expected' => 1
            ],
            'case-with-number-is-two' => [
                'params' => [
                    'number1' => 2,
                    'number2' => 1
                ],
                'expected' => 3
            ]
        ];
    }
}
