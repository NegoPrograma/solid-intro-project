<?php

namespace Alura\Solid\Model;

class Feedback
{
    private string $depoimento;
    private int $nota;

    public function __construct(int $nota, ?string $depoimento)
    {
        $this->validarFeedback($nota, $depoimento);
        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    public function validarFeedback(int $nota, ?string $depoimento): void
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }
    }
}
