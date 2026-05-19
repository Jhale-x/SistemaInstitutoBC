<?php
class Calendario
{
    public ?int $id_evento = null;
    public string $titulo = '';
    public string $descripcion = '';
    public ?string $fecha = null;
    public ?string $hora = null;

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_evento = $data['id_evento'] ?? null;
        $this->titulo = $data['titulo'] ?? '';
        $this->descripcion = $data['descripcion'] ?? '';
        $this->fecha = $data['fecha'] ?? null;
        $this->hora = $data['hora'] ?? null;
    }
}
