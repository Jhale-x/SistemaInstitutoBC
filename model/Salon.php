<?php
class Salon
{
    public ?int $id_salon = null;
    public string $nombre = '';
    public int $capacidad = 0;
    public string $ubicacion = '';
    public string $carrera = '';
    public string $estado = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_salon = $data['id_salon'] ?? null;
        $this->nombre = $data['nombre'] ?? '';
        $this->capacidad = $data['capacidad'] ?? 0;
        $this->ubicacion = $data['ubicacion'] ?? '';
        $this->carrera = $data['carrera'] ?? '';
        $this->estado = $data['estado'] ?? '';
    }
}
