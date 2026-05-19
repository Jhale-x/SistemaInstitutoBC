<?php
class Reporte
{
    public ?int $id_reporte = null;
    public string $titulo = '';
    public string $descripcion = '';
    public string $autor = '';
    public ?string $fecha = null;

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_reporte = $data['id_reporte'] ?? null;
        $this->titulo = $data['titulo'] ?? '';
        $this->descripcion = $data['descripcion'] ?? '';
        $this->autor = $data['autor'] ?? '';
        $this->fecha = $data['fecha'] ?? null;
    }
}
