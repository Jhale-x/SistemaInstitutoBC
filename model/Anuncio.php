<?php
class Anuncio
{
    public ?int $id_anuncio = null;
    public string $titulo = '';
    public string $descripcion = '';
    public string $docente = '';
    public ?string $fecha = null;
    public string $estado = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_anuncio = $data['id_anuncio'] ?? null;
        $this->titulo = $data['titulo'] ?? '';
        $this->descripcion = $data['descripcion'] ?? '';
        $this->docente = $data['docente'] ?? '';
        $this->fecha = $data['fecha'] ?? null;
        $this->estado = $data['estado'] ?? '';
    }
}
