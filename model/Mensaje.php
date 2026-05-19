<?php
class Mensaje
{
    public ?int $id_mensaje = null;
    public string $emisor = '';
    public string $receptor = '';
    public string $asunto = '';
    public string $mensaje = '';
    public ?string $fecha = null;
    public string $estado = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_mensaje = $data['id_mensaje'] ?? null;
        $this->emisor = $data['emisor'] ?? '';
        $this->receptor = $data['receptor'] ?? '';
        $this->asunto = $data['asunto'] ?? '';
        $this->mensaje = $data['mensaje'] ?? '';
        $this->fecha = $data['fecha'] ?? null;
        $this->estado = $data['estado'] ?? '';
    }
}
