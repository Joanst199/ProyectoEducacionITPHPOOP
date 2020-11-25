<?php 
	class Destino
	{
		private $destID;
		private $destNombre;
		private $regID;
		private $destPrecio;
		private $destAsientos;
		private $destDisponibles;
		private $destActivo;

		public function listarDestinos(){
			$link = Conexion::conectar();
			$sql= 'SELECT d.destID, d.destNombre, r.regNombre, d.destPrecio, d.destAsientos, 
			d.destDisponibles, d.destActivo FROM destinos AS d INNER JOIN regiones AS r ON r.regID = d.regID';
			$stmt = $link->prepare($sql);
			$stmt-> execute();
			$destinos = $stmt-> fetchAll(PDO::FETCH_ASSOC);
			return $destinos;

		}
	
    /**
     * @return mixed
     */
    public function getDestId()
    {
        return $this->destId;
    }

    /**
     * @param mixed $destId
     *
     * @return self
     */
    public function setDestId($destId)
    {
        $this->destId = $destId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestNombre()
    {
        return $this->destNombre;
    }

    /**
     * @param mixed $destNombre
     *
     * @return self
     */
    public function setDestNombre($destNombre)
    {
        $this->destNombre = $destNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegID()
    {
        return $this->regID;
    }

    /**
     * @param mixed $regID
     *
     * @return self
     */
    public function setRegID($regID)
    {
        $this->regID = $regID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestPrecio()
    {
        return $this->destPrecio;
    }

    /**
     * @param mixed $destPrecio
     *
     * @return self
     */
    public function setDestPrecio($destPrecio)
    {
        $this->destPrecio = $destPrecio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestAsientos()
    {
        return $this->destAsientos;
    }

    /**
     * @param mixed $destAsientos
     *
     * @return self
     */
    public function setDestAsientos($destAsientos)
    {
        $this->destAsientos = $destAsientos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestDisponibles()
    {
        return $this->destDisponibles;
    }

    /**
     * @param mixed $destDisponibles
     *
     * @return self
     */
    public function setDestDisponibles($destDisponibles)
    {
        $this->destDisponibles = $destDisponibles;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestActivo()
    {
        return $this->destActivo;
    }

    /**
     * @param mixed $destActivo
     *
     * @return self
     */
    public function setDestActivo($destActivo)
    {
        $this->destActivo = $destActivo;

        return $this;
    }
}
 ?>