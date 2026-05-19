<?php
class Carrera
{
    public ?int $id_carrera = null;
    public string $nombre = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_carrera = $data['id_carrera'] ?? null;
        $this->nombre = $data['nombre'] ?? '';
    }
}
