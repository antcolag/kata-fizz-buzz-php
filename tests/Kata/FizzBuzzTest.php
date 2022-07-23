<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;
    private Printer $printerMock;

    protected function setUp(): void
    {
        $printerMockBuilder = $this->getMockBuilder(Printer::class);
        $this->printerMock = $printerMockBuilder->setMethods(['print'])->getMock();
        $this->fizzBuzz = new FizzBuzz($this->printerMock);
    }

    public function testFizz(): void
    {
        $this->printerMock->expects($this->exactly(3))->method('print')->withConsecutive(
            [$this->equalTo('1')],
            [$this->equalTo('2')],
            [$this->equalTo('Fizz')]
        );
        $this->fizzBuzz->handle(3);
    }

    public function testBuzz(): void
    {
        $this->printerMock->expects($this->exactly(5))->method('print')->withConsecutive(
            [$this->equalTo('1')],
            [$this->equalTo('2')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('4')],
            [$this->equalTo('Buzz')]
        );
        $this->fizzBuzz->handle(5);
    }

    public function testFizzBuzz100(): void
    {
        $this->printerMock->expects($this->exactly(100))->method('print')->withConsecutive(
            [$this->equalTo('1')],
            [$this->equalTo('2')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('4')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('7')],
            [$this->equalTo('8')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('11')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('13')],
            [$this->equalTo('14')],
            [$this->equalTo('FizzBuzz')],
            [$this->equalTo('16')],
            [$this->equalTo('17')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('19')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('22')],
            [$this->equalTo('23')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('26')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('28')],
            [$this->equalTo('29')],
            [$this->equalTo('FizzBuzz')],
            [$this->equalTo('31')],
            [$this->equalTo('32')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('34')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('37')],
            [$this->equalTo('38')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('41')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('43')],
            [$this->equalTo('44')],
            [$this->equalTo('FizzBuzz')],
            [$this->equalTo('46')],
            [$this->equalTo('47')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('49')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('52')],
            [$this->equalTo('53')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('56')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('58')],
            [$this->equalTo('59')],
            [$this->equalTo('FizzBuzz')],
            [$this->equalTo('61')],
            [$this->equalTo('62')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('64')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('67')],
            [$this->equalTo('68')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('71')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('73')],
            [$this->equalTo('74')],
            [$this->equalTo('FizzBuzz')],
            [$this->equalTo('76')],
            [$this->equalTo('77')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('79')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('82')],
            [$this->equalTo('83')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('86')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('88')],
            [$this->equalTo('89')],
            [$this->equalTo('FizzBuzz')],
            [$this->equalTo('91')],
            [$this->equalTo('92')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('94')],
            [$this->equalTo('Buzz')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('97')],
            [$this->equalTo('98')],
            [$this->equalTo('Fizz')],
            [$this->equalTo('Buzz')],
        );
        $this->fizzBuzz->handle();
    }
}
