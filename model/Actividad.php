<?php
class Actividad
{
    public ?int $id_actividad = null;
    public string $titulo = '';
    public string $descripcion = '';
    public ?string $fecha_entrega = null;

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_actividad = $data['id_actividad'] ?? null;
        $this->titulo = $data['titulo'] ?? '';
        $this->descripcion = $data['descripcion'] ?? '';
        $this->fecha_entrega = $data['fecha_entrega'] ?? null;
    }
}
