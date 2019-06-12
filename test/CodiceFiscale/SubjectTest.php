<?php

namespace CodiceFiscale;

/**
 * Test for the Checker class.
 *
 * @author davidepastore
 */
class SubjectTest extends \PHPUnit\Framework\TestCase
{
    protected $subject = null;
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->subject = new Subject(
            array(
                'name' => 'Mario',
                'surname' => 'Rossi',
                'birthDate' => '1985-12-10',
                'gender' => 'M',
                'belfioreCode' => 'A562',
            )
        );
    }

    /**
     * Test for getName.
     */
    public function testGetName()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            //'belfioreCode' => 'A562',
          )
        );
        $actual = $this->subject->getName();
        $expected = 'Mario';
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for setName.
     */
    public function testSetName()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $this->subject->setName('Fabrizio');
        $actual = $this->subject->getName();
        $expected = 'Fabrizio';
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for getSurname.
     */
    public function testGetSurname()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $actual = $this->subject->getSurname();
        $expected = 'Rossi';
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for setSurname.
     */
    public function testSetSurname()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $this->subject->setSurname('Russo');
        $actual = $this->subject->getSurname();
        $expected = 'Russo';
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for getBirthDate.
     */
    public function testGetBirthDate()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $actual = $this->subject->getBirthDate();
        $expected = new \DateTime('1985-12-10');
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for setBirthDate.
     */
    public function testSetBirthDate()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $this->subject->setBirthDate(new \DateTime('1944-01-10'));
        $actual = $this->subject->getBirthDate();
        $expected = new \DateTime('1944-01-10');
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for setBirthDate.
     */
    public function testSetBirthDateImmutable()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $this->subject->setBirthDate(new \DateTimeImmutable('1944-01-10'));
        $actual = $this->subject->getBirthDate();
        $expected = new \DateTimeImmutable('1944-01-10');
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for setBirthDate.
     */
    public function testSetBirthDateFancyConversion()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $this->subject->setBirthDate('1944-01-10');
        $actual = $this->subject->getBirthDate();
        $expected = new \DateTimeImmutable('1944-01-10');
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for getGender.
     */
    public function testGetGender()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $actual = $this->subject->getGender();
        $expected = 'M';
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for setGender.
     */
    public function testSetGender()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $this->subject->setGender('F');
        $actual = $this->subject->getGender();
        $expected = 'F';
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for getBelfioreCode.
     */
    public function testGetBelfioreCode()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $actual = $this->subject->getBelfioreCode();
        $expected = 'A562';
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for setGender.
     */
    public function testSetBelfioreCode()
    {
        $subject = new Subject(
          array(
            'name' => 'Mario',
            'surname' => 'Rossi',
            'birthDate' => '1985-12-10',
            'gender' => 'M',
            'belfioreCode' => 'A562',
          )
        );
        $this->subject->setBelfioreCode('H501');
        $actual = $this->subject->getBelfioreCode();
        $expected = 'H501';
        $this->assertEquals($expected, $actual);
    }
}
