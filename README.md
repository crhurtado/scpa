Estructura del Sistema

SISTEMA DE FINANCIAMIENTO AGRÍCOLA

1.- Productores
     1.1.- Nuevo Productor:
  * C.I. (campo Clave)
  * Nombres y Apellidos
  * Dirección de Vivienda: - UPA
				       - Otra (Abre Campo para Dirección)
  * Teléfono 1
  * Teléfono 2
            Agregar: * Nombre de la UPA
		  * Estado 
		  * Municipio
		  * Parroquia
		  * Sector
		  * Tenencia
		  * Área de la UPA
		  * Colindantes:   - Norte 
				     - Sur
				     - Este
				     - Oeste
        1.2.- Productores Existentes:
			* C.I. Productor (Generar Datos Básicos)
			* Agregar UPA (generar Formulario para agregar  UPA)
	* Consultar Productor (generar  datos del Productor y si tiene Financiamiento) 
	* Consultar Lista de Productores. (Filtros por Estados, Municipios, Parroquias)


2.- Financiamientos
     2.1.- Nuevo Financiamiento.
		* C.I. Productor (Genera Datos Básicos)
		* UPA (se selecciona la UPA y genera los datos de la UPA)
		* Institución:   - BANCO AGRICOLA
				- FONDAS
				- AGROPATRIA
		* Tipo de Financiamiento: - MONETARIO
					         - INSUMO
					         - AMBOS
		* Monto aprobado (habilitado para opc 1 y 3)
		* Insumo: (Insumo, Cantidad, Precio)  Monto de Insumo
		* Estatus
		* Rubro (Lista de Rubros)
		* Hectáreas Beneficiadas
		* Fecha de Liquidación
		* Fecha de Vencimiento
		* Producción  Estimada  
		* Colocación de la Producción 
		* Técnico: - C.I.
			      -  Nombre y apellido
			      -  Teléfono
			      -  Profesión 
			      -  Institución 
     2.2 Seguimiento de Financiamientos
		* 1ra visita:     - C.I productor
				- UPA financiada
				- C.I Técnico
				- Estatus
				- Fecha de Siembra
				- Rubro
				- ciclo
				- superficie Sembrada
				- Fecha estimada de cosecha.
				- Fecha de la Visita 
				- Observación
		* Agregar Observación: - Fecha de la visita
					    - Superficie  Perdida
					    - Observación
2.3  Cancelación de Financiamiento:
		* C.I. Productor 
		* UPA financiada
		* Cosecha  
		* Silo
		* Costo
		* Monto Liquidado (calculado)
		* Saldo a Favor (calculado)
		* Saldo negativo (calculado)
		* Estatus
			
3.-  Reportes
	3.1 Productores (filtros Municipio, Parroquia, financiados, no financiados)
	3.2 Cosechas (filtros: periodo de tiempo, efectivas, en espera) 
	3.3 Financiamientos (filtros: Municipio, Parroquia, institución, estatus)
	3.4 Superficies sembradas (filtros: Municipio, Parroquia, rubro, productor, montos)
