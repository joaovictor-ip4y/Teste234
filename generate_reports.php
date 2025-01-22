<?php
// Simular um ambiente de execução de PHPUnit para gerar os arquivos junit.xml e coverage.xml.

// Simulando o arquivo junit.xml com informações de um teste básico
$junitXml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
    <testsuite name="Application Test Suite" tests="1" assertions="1" errors="0" warnings="0" failures="0" skipped="0" time="0.006945">
        <testsuite name="App\Tests\CalculatorTest" file="tests/CalculatorTest.php" tests="1" assertions="1" errors="0" warnings="0" failures="0" skipped="0" time="0.006945">
            <testcase name="testAdd" class="App\Tests\CalculatorTest" classname="App.Tests.CalculatorTest" file="tests/CalculatorTest.php" line="11" assertions="1" time="0.006945"/>
        </testsuite>
    </testsuite>
</testsuites>
XML;

// Salvar o arquivo junit.xml
file_put_contents('junit.xml', $junitXml);

// Simulando o arquivo coverage.xml com dados fictícios de cobertura
$coverageXml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<coverage>
    <project name="Example Project">
        <metrics coveredelements="8" elements="10"/>
    </project>
</coverage>
XML;

// Salvar o arquivo coverage.xml
file_put_contents('coverage.xml', $coverageXml);

echo "Arquivos junit.xml e coverage.xml gerados com sucesso!";

