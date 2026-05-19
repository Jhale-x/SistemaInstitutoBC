<?php
class Curso
{
    public ?int $id_curso = null;
    public string $nombre = '';
    public string $descripcion = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_curso = $data['id_curso'] ?? null;
        $this->nombre = $data['nombre'] ?? '';
        $this->descripcion = $data['descripcion'] ?? '';
    }
}
