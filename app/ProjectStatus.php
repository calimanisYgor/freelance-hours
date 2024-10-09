<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Closed = 'closed';

    public function label(): string
    {
        // match evita o uso de vários if's
        return match ($this) {
            self::Open => 'Aceitando propostas',
            self::Closed => 'Encerrado',
        };
    }
}
