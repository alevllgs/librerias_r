<?php
$page_title = 'Guía SQL Server';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= $base_url ?>/index.php">TechGuides</a>
    <span class="separator">›</span>
    <span class="current">SQL Server</span>
</div>

<a href="<?= $base_url ?>/index.php" class="back-btn">
    <i class="fas fa-arrow-left"></i> Volver al dashboard
</a>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">Base de Datos</div>
    <h1><i class="fas fa-database" style="margin-right: 0.5rem;"></i> Guía SQL Server</h1>
    <p>Motor de base de datos relacional de Microsoft. Instalación, configuración, consultas T-SQL, vistas, triggers, stored procedures y automatización en Windows.</p>
</section>

<!-- 01 – INSTALACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">01</div>
        <h2 class="section-title">Instalación</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">SQL Server</span>
            <h3>Instalación en Windows</h3>
        </div>
        <pre><span class="cm"># 1. Descargar SQL Server (Developer Edition — gratis)</span>
<span class="cm"># https://www.microsoft.com/sql-server/sql-server-downloads</span>

<span class="cm"># 2. Ejecutar el instalador y elegir tipo:</span>
<span class="cm">#    - Básica: instalación por defecto</span>
<span class="cm">#    - Personalizada: elegir características</span>
<span class="cm">#    - Descargar medios: ISO/CAB</span>

<span class="cm"># 3. En instalación personalizada, seleccionar:</span>
<span class="cm">#    - Database Engine Services</span>
<span class="cm">#    - SQL Server Replication (opcional)</span>
<span class="cm">#    - Full-Text Search (opcional)</span>

<span class="cm"># 4. Configurar instancia:</span>
<span class="cm">#    - Default instance: MSSQLSERVER</span>
<span class="cm">#    - Named instance: SQLEXPRESS (si ya hay otra)</span>

<span class="cm"># 5. Modo de autenticación:</span>
<span class="cm">#    - Modo Windows (recomendado para desarrollo local)</span>
<span class="cm">#    - Modo Mixto (Windows + SQL Server auth)</span>

<span class="cm"># 6. Agregar usuario actual como administrador</span></pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">SSMS</span>
            <h3>SQL Server Management Studio</h3>
        </div>
        <pre><span class="cm"># Descargar SSMS (herramienta gráfica de administración)</span>
<span class="cm"># https://aka.ms/ssmsfullsetup</span>

<span class="cm"># Instalar con opciones por defecto</span>
<span class="cm"># SSMS permite: consultas, diseño de tablas, backups, etc.</span>

<span class="cm"># Alternativa: Azure Data Studio</span>
<span class="cm"># https://docs.microsoft.com/sql/azure-data-studio/download</span></pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">sqlcmd</span>
            <h3>Instalar sqlcmd (línea de comandos)</h3>
        </div>
        <pre><span class="cm"># sqlcmd viene incluido con SQL Server</span>
<span class="cm"># Si no está, instalar desde:</span>
<span class="cm"># https://docs.microsoft.com/sql/tools/sqlcmd-utility</span>

<span class="cm"># Ruta típica en Windows</span>
<span class="str">C:\Program Files\Microsoft SQL Server\Client SDK\ODBC\170\Tools\Binn\SQLCMD.EXE</span>

<span class="cm"># Agregar al PATH del sistema para usar desde cualquier terminal</span></pre>
    </div>
</section>

<!-- 02 – CONFIGURACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">02</div>
        <h2 class="section-title">Configuración</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">config</span>
            <h3>Habilitar TCP/IP y puerto 1433</h3>
        </div>
        <pre><span class="cm"># Abrir SQL Server Configuration Manager</span>
<span class="cm"># Inicio → SQL Server Configuration Manager</span>

<span class="cm"># 1. SQL Server Network Configuration</span>
<span class="cm">#    → Protocols for [instancia]</span>
<span class="cm">#    → TCP/IP → Enable</span>

<span class="cm"># 2. TCP/IP → Properties → IP Addresses</span>
<span class="cm">#    → IPAll → TCP Port: 1433</span>
<span class="cm">#    → Apply → Reiniciar servicio</span>

<span class="cm"># 3. Reiniciar SQL Server:</span>
<span class="cm">#    Services → SQL Server ([instancia]) → Restart</span></pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">firewall</span>
            <h3>Abrir puerto en Windows Firewall</h3>
        </div>
        <pre><span class="cm"># PowerShell como Administrador</span>
<span class="fn">New-NetFirewallRule</span> -DisplayName <span class="str">"SQL Server"</span> `
  -Direction Inbound -Protocol TCP -LocalPort <span class="str">1433</span> `
  -Action Allow

<span class="cm"># Verificar regla creada</span>
<span class="fn">Get-NetFirewallRule</span> -DisplayName <span class="str">"SQL Server"</span> |
  Select DisplayName, Enabled

<span class="cm"># Alternativa gráfica:</span>
<span class="cm"># wf.msc → Inbound Rules → New Rule → Port → 1433</span></pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">auth</span>
            <h3>Habilitar autenticación SQL Server</h3>
        </div>
        <pre><span class="cm"># Si elegiste solo Windows Auth en instalación:</span>

<span class="cm"># 1. SSMS → Conectar con Windows Auth</span>
<span class="cm"># 2. Click derecho en servidor → Properties</span>
<span class="cm"># 3. Security → SQL Server and Windows Authentication mode</span>
<span class="cm"># 4. Reiniciar SQL Server</span>

<span class="cm"># 5. Crear login SQL:</span>
<span class="cm">#    Security → Logins → New Login</span>
<span class="cm">#    SQL Server authentication → usuario + password</span>
<span class="cm">#    Desmarcar "Enforce password expiration"</span></pre>
    </div>
</section>

<!-- 03 – COMANDOS CLI -->
<section class="section">
    <div class="section-header">
        <div class="section-num">03</div>
        <h2 class="section-title">Comandos CLI (sqlcmd / PowerShell)</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">sqlcmd</span>
            <h3>sqlcmd — comandos básicos</h3>
        </div>
        <pre><span class="cm">:: Conectar con Windows Auth</span>
<span class="fn">sqlcmd</span> -S localhost -E

<span class="cm">:: Conectar con SQL Auth</span>
<span class="fn">sqlcmd</span> -S localhost -U sa -P <span class="str">"tu_password"</span>

<span class="cm">:: Conectar a instancia nombrada</span>
<span class="fn">sqlcmd</span> -S .\SQLEXPRESS -E

<span class="cm">:: Ejecutar script .sql</span>
<span class="fn">sqlcmd</span> -S localhost -E -i C:\scripts\consulta.sql

<span class="cm">:: Ejecutar consulta directa</span>
<span class="fn">sqlcmd</span> -S localhost -E -Q <span class="str">"SELECT @@VERSION"</span>

<span class="cm">:: Salida a archivo</span>
<span class="fn">sqlcmd</span> -S localhost -E -Q <span class="str">"SELECT * FROM users"</span> -o C:\output.txt

<span class="cm">:: Dentro de sqlcmd, comandos internos:</span>
<span class="fn">:r</span> script.sql     <span class="cm">:: ejecutar archivo</span>
<span class="fn">:serverlist</span>         <span class="cm">:: listar servidores</span>
<span class="fn">:exit</span>                <span class="cm">:: salir</span>
<span class="fn">GO</span>                   <span class="cm">:: ejecutar lote de comandos</span></pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">PowerShell</span>
            <h3>PowerShell — módulo SQLServer</h3>
        </div>
        <pre><span class="cm"># Instalar módulo SQLServer</span>
<span class="fn">Install-Module</span> -Name SqlServer -Force -AllowClobber

<span class="cm"># Verificar instalación</span>
<span class="fn">Get-Module</span> SqlServer -ListAvailable

<span class="cm"># Importar módulo</span>
<span class="fn">Import-Module</span> SqlServer

<span class="cm"># Ejecutar consulta con Invoke-Sqlcmd</span>
<span class="fn">Invoke-Sqlcmd</span> -ServerInstance <span class="str">"localhost"</span> `
  -Query <span class="str">"SELECT @@VERSION"</span>

<span class="cm"># Con autenticación SQL</span>
<span class="fn">Invoke-Sqlcmd</span> -ServerInstance <span class="str">"localhost"</span> `
  -Username <span class="str">"sa"</span> -Password <span class="str">"tu_password"</span> `
  -Query <span class="str">"SELECT name FROM sys.databases"</span>

<span class="cm"># Ejecutar desde archivo .sql</span>
<span class="fn">Invoke-Sqlcmd</span> -ServerInstance <span class="str">"localhost"</span> `
  -InputFile <span class="str">"C:\scripts\migracion.sql"</span>

<span class="cm"># Listar bases de datos</span>
<span class="fn">Invoke-Sqlcmd</span> -ServerInstance <span class="str">"localhost"</span> `
  -Query <span class="str">"SELECT name, create_date FROM sys.databases"</span> |
  Format-Table</pre>
    </div>
</section>

<!-- 04 – CONSULTAS BÁSICAS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">04</div>
        <h2 class="section-title">Consultas básicas (T-SQL)</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">SELECT</span>
            <h3>Consultas de lectura</h3>
        </div>
        <pre><span class="cm">-- Seleccionar todas las columnas</span>
<span class="kw">SELECT</span> * <span class="kw">FROM</span> usuarios;

<span class="cm">-- Seleccionar columnas específicas</span>
<span class="kw">SELECT</span> id, nombre, email <span class="kw">FROM</span> usuarios;

<span class="cm">-- Alias de columna</span>
<span class="kw">SELECT</span> nombre <span class="kw">AS</span> [Nombre Completo], email <span class="kw">AS</span> Correo
<span class="kw">FROM</span> usuarios;

<span class="cm">-- Filtrar con WHERE</span>
<span class="kw">SELECT</span> * <span class="kw">FROM</span> usuarios
<span class="kw">WHERE</span> activo = 1 <span class="kw">AND</span> ciudad = <span class="str">'Bogotá'</span>;

<span class="cm">-- Ordenar resultados</span>
<span class="kw">SELECT</span> * <span class="kw">FROM</span> usuarios
<span class="kw">ORDER BY</span> fecha_registro <span class="kw">DESC</span>;

<span class="cm">-- Limitar resultados (equivalente a LIMIT)</span>
<span class="kw">SELECT TOP 10</span> * <span class="kw">FROM</span> usuarios;

<span class="cm">-- Con OFFSET/FETCH (SQL Server 2012+)</span>
<span class="kw">SELECT</span> * <span class="kw">FROM</span> usuarios
<span class="kw">ORDER BY</span> id
<span class="kw">OFFSET 20 ROWS FETCH NEXT 10 ROWS ONLY</span>;</pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">JOINs</span>
            <h3>Uniones entre tablas</h3>
        </div>
        <pre><span class="cm">-- INNER JOIN: solo registros que coinciden en ambas tablas</span>
<span class="kw">SELECT</span> u.nombre, p.titulo
<span class="kw">FROM</span> usuarios u
<span class="kw">INNER JOIN</span> posts p <span class="kw">ON</span> u.id = p.usuario_id;

<span class="cm">-- LEFT JOIN: todos los registros de la izquierda</span>
<span class="kw">SELECT</span> u.nombre, p.titulo
<span class="kw">FROM</span> usuarios u
<span class="kw">LEFT JOIN</span> posts p <span class="kw">ON</span> u.id = p.usuario_id;

<span class="cm">-- GROUP BY: agrupar y agregar</span>
<span class="kw">SELECT</span> ciudad, <span class="kw">COUNT</span>(*) <span class="kw">AS</span> total
<span class="kw">FROM</span> usuarios
<span class="kw">GROUP BY</span> ciudad
<span class="kw">HAVING COUNT</span>(*) > <span class="str">5</span>;

<span class="cm">-- Subconsultas</span>
<span class="kw">SELECT</span> nombre
<span class="kw">FROM</span> usuarios
<span class="kw">WHERE</span> id <span class="kw">IN</span> (<span class="kw">SELECT</span> usuario_id <span class="kw">FROM</span> posts <span class="kw">WHERE</span> estado = <span class="str">'publicado'</span>);</pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">DML</span>
            <h3>INSERT, UPDATE, DELETE</h3>
        </div>
        <pre><span class="cm">-- Insertar un registro</span>
<span class="kw">INSERT INTO</span> usuarios (nombre, email, ciudad)
<span class="kw">VALUES</span> (<span class="str">'Ana López'</span>, <span class="str">'ana@correo.com'</span>, <span class="str">'Medellín'</span>);

<span class="cm">-- Insertar múltiples registros</span>
<span class="kw">INSERT INTO</span> usuarios (nombre, email)
<span class="kw">VALUES</span>
  (<span class="str">'Carlos'</span>, <span class="str">'carlos@correo.com'</span>),
  (<span class="str">'Diana'</span>, <span class="str">'diana@correo.com'</span>);

<span class="cm">-- Actualizar registros</span>
<span class="kw">UPDATE</span> usuarios
<span class="kw">SET</span> activo = 1, fecha_actualizacion = <span class="fn">GETDATE</span>()
<span class="kw">WHERE</span> email <span class="kw">LIKE</span> <span class="str">'%@correo.com'</span>;

<span class="cm">-- Eliminar registros (¡cuidado!)</span>
<span class="kw">DELETE FROM</span> usuarios
<span class="kw">WHERE</span> fecha_registro < <span class="fn">DATEADD</span>(YEAR, -5, <span class="fn">GETDATE</span>());

<span class="cm">-- TRUNCATE: eliminar todos los registros (más rápido, no registra log por fila)</span>
<span class="kw">TRUNCATE TABLE</span> logs_temporales;</pre>
    </div>
</section>

<!-- 05 – OBJETOS DE BD -->
<section class="section">
    <div class="section-header">
        <div class="section-num">05</div>
        <h2 class="section-title">Objetos de base de datos</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">DDL</span>
            <h3>CREATE DATABASE / CREATE TABLE</h3>
        </div>
        <pre><span class="cm">-- Crear base de datos</span>
<span class="kw">CREATE DATABASE</span> MiAppDB;
<span class="kw">GO</span>
<span class="kw">USE</span> MiAppDB;
<span class="kw">GO</span>

<span class="cm">-- Crear tabla con constraints</span>
<span class="kw">CREATE TABLE</span> productos (
    id          <span class="kw">INT IDENTITY</span>(1,1) <span class="kw">PRIMARY KEY</span>,
    nombre      <span class="kw">NVARCHAR</span>(100) <span class="kw">NOT NULL</span>,
    precio      <span class="kw">DECIMAL</span>(10,2) <span class="kw">NOT NULL DEFAULT</span> 0,
    stock       <span class="kw">INT NOT NULL DEFAULT</span> 0,
    categoria   <span class="kw">NVARCHAR</span>(50),
    activo      <span class="kw">BIT NOT NULL DEFAULT</span> 1,
    creado_en   <span class="kw">DATETIME2 NOT NULL DEFAULT GETDATE</span>(),
    <span class="kw">CONSTRAINT</span> CK_precio_positivo <span class="kw">CHECK</span> (precio >= 0)
);

<span class="cm">-- Tipos de datos comunes:</span>
<span class="cm">-- INT, BIGINT, SMALLINT, TINYINT  →  enteros</span>
<span class="cm">-- DECIMAL(p,s), FLOAT              →  decimales</span>
<span class="cm">-- VARCHAR(n), NVARCHAR(n)          →  texto (NVARCHAR soporta Unicode)</span>
<span class="cm">-- CHAR(n), NCHAR(n)                →  texto de longitud fija</span>
<span class="cm">-- DATE, DATETIME2, DATETIMEOFFSET  →  fechas</span>
<span class="cm">-- BIT                              →  booleano (0/1)</span>
<span class="cm">-- UNIQUEIDENTIFIER                 →  GUID</span></pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">ALTER</span>
            <h3>Modificar tablas y constraints</h3>
        </div>
        <pre><span class="cm">-- Agregar columna</span>
<span class="kw">ALTER TABLE</span> productos
<span class="kw">ADD</span> descripcion <span class="kw">NVARCHAR</span>(500) <span class="kw">NULL</span>;

<span class="cm">-- Modificar columna</span>
<span class="kw">ALTER TABLE</span> productos
<span class="kw">ALTER COLUMN</span> nombre <span class="kw">NVARCHAR</span>(200) <span class="kw">NOT NULL</span>;

<span class="cm">-- Agregar llave foránea</span>
<span class="kw">ALTER TABLE</span> productos
<span class="kw">ADD CONSTRAINT</span> FK_productos_categoria
<span class="kw">FOREIGN KEY</span> (categoria_id) <span class="kw">REFERENCES</span> categorias(id);

<span class="cm">-- Agregar índice</span>
<span class="kw">CREATE INDEX</span> IX_productos_nombre
<span class="kw">ON</span> productos (nombre);

<span class="cm">-- Eliminar tabla</span>
<span class="kw">DROP TABLE IF EXISTS</span> productos;</pre>
    </div>
</section>

<!-- 06 – VISTAS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">06</div>
        <h2 class="section-title">Vistas (Views)</h2>
    </div>

    <div class="g2">
        <div class="card card-sqlserver">
            <div class="card-head">
                <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">conceptos</span>
                <h3>¿Qué es una vista?</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;">Una vista es una <strong>consulta guardada</strong> que se comporta como una tabla virtual. No almacena datos, solo la definición de la consulta.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Ventajas:</strong> simplifica consultas complejas, oculta columnas sensibles, reutiliza lógica de negocio y mejora la seguridad.</p>
                <p>Las vistas se pueden consultar con <code>SELECT</code> igual que una tabla normal.</p>
            </div>
        </div>

        <div class="card card-sqlserver">
            <div class="card-head">
                <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">tipos</span>
                <h3>Tipos de vistas</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Vista simple:</strong> Basada en una sola tabla.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Vista compleja:</strong> JOINs entre múltiples tablas.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Vista indexada:</strong> Materializada con índices físicos.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Vista particionada:</strong> Distribuye datos entre tablas.</p>
                <p><strong>Vista del sistema:</strong> Información del catálogo (sys.*).</p>
            </div>
        </div>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">ejemplos</span>
            <h3>Crear y usar vistas</h3>
        </div>
        <pre><span class="cm">-- Crear vista simple</span>
<span class="kw">CREATE VIEW</span> vw_usuarios_activos <span class="kw">AS</span>
<span class="kw">SELECT</span> id, nombre, email, fecha_registro
<span class="kw">FROM</span> usuarios
<span class="kw">WHERE</span> activo = 1;

<span class="cm">-- Crear vista compleja (múltiples tablas)</span>
<span class="kw">CREATE VIEW</span> vw_posts_con_autor <span class="kw">AS</span>
<span class="kw">SELECT</span>
    p.id,
    p.titulo,
    p.contenido,
    u.nombre <span class="kw">AS</span> autor,
    p.fecha_publicacion
<span class="kw">FROM</span> posts p
<span class="kw">INNER JOIN</span> usuarios u <span class="kw">ON</span> p.usuario_id = u.id
<span class="kw">WHERE</span> p.estado = <span class="str">'publicado'</span>;

<span class="cm">-- Usar la vista (igual que una tabla)</span>
<span class="kw">SELECT</span> * <span class="kw">FROM</span> vw_posts_con_autor
<span class="kw">WHERE</span> autor = <span class="str">'Ana López'</span>
<span class="kw">ORDER BY</span> fecha_publicacion <span class="kw">DESC</span>;

<span class="cm">-- Modificar vista existente</span>
<span class="kw">ALTER VIEW</span> vw_usuarios_activos <span class="kw">AS</span>
<span class="kw">SELECT</span> id, nombre, email, ciudad, fecha_registro
<span class="kw">FROM</span> usuarios
<span class="kw">WHERE</span> activo = 1;

<span class="cm">-- Eliminar vista</span>
<span class="kw">DROP VIEW IF EXISTS</span> vw_usuarios_activos;</pre>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        Usa vistas para <strong>simplificar consultas recurrentes</strong> y <strong>proteger datos sensibles</strong> ocultando columnas como contraseñas o información financiera. Las vistas también se pueden usar en reportes, dashboards y APIs.
    </div>
</section>

<!-- 07 – TRIGGERS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">07</div>
        <h2 class="section-title">Triggers (Disparadores)</h2>
    </div>

    <div class="g2">
        <div class="card card-sqlserver">
            <div class="card-head">
                <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">conceptos</span>
                <h3>¿Qué es un trigger?</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;">Un trigger es un <strong>bloque de código T-SQL que se ejecuta automáticamente</strong> cuando ocurre un evento (INSERT, UPDATE, DELETE) en una tabla o vista.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Usos comunes:</strong> auditoría, validación de datos, mantener historial de cambios, sincronizar tablas, aplicar reglas de negocio complejas.</p>
                <p>Los triggers tienen acceso a las tablas virtuales <code>inserted</code> y <code>deleted</code> que contienen los datos afectados.</p>
            </div>
        </div>

        <div class="card card-sqlserver">
            <div class="card-head">
                <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">tipos</span>
                <h3>Tipos de triggers</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>AFTER / FOR:</strong> Se ejecuta después del evento DML. Solo en tablas. Se puede definir si es AFTER INSERT, UPDATE o DELETE (o combinaciones).</p>
                <p style="margin-bottom: 0.5rem;"><strong>INSTEAD OF:</strong> Reemplaza la operación DML original. Se ejecuta en lugar del INSERT/UPDATE/DELETE. Funciona en tablas y vistas.</p>
                <p><strong>DDL Trigger:</strong> Responde a eventos de definición (CREATE, ALTER, DROP). Útil para auditoría de esquemas.</p>
            </div>
        </div>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">ejemplos</span>
            <h3>Ejemplos de triggers</h3>
        </div>
        <pre><span class="cm">-- 1. Trigger de auditoría (AFTER INSERT, UPDATE, DELETE)</span>
<span class="kw">CREATE TABLE</span> auditoria_usuarios (
    id          <span class="kw">INT IDENTITY PRIMARY KEY</span>,
    usuario_id  <span class="kw">INT</span>,
    accion      <span class="kw">VARCHAR</span>(10),
    fecha       <span class="kw">DATETIME2 DEFAULT GETDATE</span>(),
    usuario_db  <span class="kw">NVARCHAR</span>(128) <span class="kw">DEFAULT SYSTEM_USER</span>
);
<span class="kw">GO</span>

<span class="kw">CREATE TRIGGER</span> trg_auditoria_usuarios
<span class="kw">ON</span> usuarios
<span class="kw">AFTER INSERT, UPDATE, DELETE</span>
<span class="kw">AS</span>
<span class="kw">BEGIN</span>
    <span class="kw">SET NOCOUNT ON</span>;

    <span class="cm">-- Registra eliminaciones</span>
    <span class="kw">INSERT INTO</span> auditoria_usuarios (usuario_id, accion)
    <span class="kw">SELECT</span> id, <span class="str">'DELETE'</span> <span class="kw">FROM</span> deleted;

    <span class="cm">-- Registra inserciones</span>
    <span class="kw">INSERT INTO</span> auditoria_usuarios (usuario_id, accion)
    <span class="kw">SELECT</span> id, <span class="str">'INSERT'</span> <span class="kw">FROM</span> inserted;

    <span class="cm">-- Registra actualizaciones</span>
    <span class="kw">INSERT INTO</span> auditoria_usuarios (usuario_id, accion)
    <span class="kw">SELECT</span> id, <span class="str">'UPDATE'</span> <span class="kw">FROM</span> inserted
    <span class="kw">WHERE EXISTS</span> (<span class="kw">SELECT</span> 1 <span class="kw">FROM</span> deleted);
<span class="kw">END</span>;
<span class="kw">GO</span>

<span class="cm">-- 2. Trigger de actualización automática de fecha</span>
<span class="kw">CREATE TRIGGER</span> trg_actualizar_fecha
<span class="kw">ON</span> productos
<span class="kw">AFTER UPDATE</span>
<span class="kw">AS</span>
<span class="kw">BEGIN</span>
    <span class="kw">UPDATE</span> p
    <span class="kw">SET</span> p.actualizado_en = <span class="fn">GETDATE</span>()
    <span class="kw">FROM</span> productos p
    <span class="kw">INNER JOIN</span> inserted i <span class="kw">ON</span> p.id = i.id;
<span class="kw">END</span>;
<span class="kw">GO</span>

<span class="cm">-- 3. Trigger que previene eliminación (INSTEAD OF DELETE)</span>
<span class="kw">CREATE TRIGGER</span> trg_prevenir_delete_usuarios
<span class="kw">ON</span> usuarios
<span class="kw">INSTEAD OF DELETE</span>
<span class="kw">AS</span>
<span class="kw">BEGIN</span>
    <span class="fn">RAISERROR</span>(<span class="str">'No se permite eliminar usuarios. Use desactivar.'</span>, 16, 1);
    <span class="kw">ROLLBACK TRANSACTION</span>;
<span class="kw">END</span>;
<span class="kw">GO</span>

<span class="cm">-- Gestionar triggers</span>
<span class="kw">SELECT</span> * <span class="kw">FROM</span> sys.triggers;                    <span class="cm">-- listar</span>
<span class="kw">DISABLE TRIGGER</span> trg_auditoria_usuarios <span class="kw">ON</span> usuarios;  <span class="cm">-- deshabilitar</span>
<span class="kw">ENABLE TRIGGER</span> trg_auditoria_usuarios <span class="kw">ON</span> usuarios;   <span class="cm">-- habilitar</span>
<span class="kw">DROP TRIGGER IF EXISTS</span> trg_auditoria_usuarios;         <span class="cm">-- eliminar</span></pre>
    </div>
</section>

<!-- 08 – PROCESOS AUTOMATIZADOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">08</div>
        <h2 class="section-title">Procesos automatizados (SQL Server Agent)</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">Agent</span>
            <h3>SQL Server Agent</h3>
        </div>
        <pre><span class="cm"># SQL Server Agent es el programador de tareas integrado</span>
<span class="cm"># Permite automatizar: backups, mantenimiento, envío de correos, etc.</span>

<span class="cm"># Verificar que el servicio esté corriendo:</span>
<span class="cm"># Services → SQL Server Agent (MSSQLSERVER) → Running</span>

<span class="cm"># Componentes principales del Agent:</span>
<span class="cm"># Jobs:      tareas programadas (conjunto de pasos)</span>
<span class="cm"># Schedules: cuándo se ejecuta un job (frecuencia)</span>
<span class="cm"># Alerts:    notificaciones basadas en eventos o condiciones</span>
<span class="cm"># Operators: destinatarios de notificaciones (email, net send)</span>

<span class="cm"># Crear Job por T-SQL:</span>
<span class="kw">EXEC</span> msdb.dbo.sp_add_job
    @job_name = <span class="str">'BackupDiario'</span>,
    @enabled = 1,
    @description = <span class="str">'Backup diario de MiAppDB'</span>;

<span class="cm"># Agregar paso al job:</span>
<span class="kw">EXEC</span> msdb.dbo.sp_add_jobstep
    @job_name = <span class="str">'BackupDiario'</span>,
    @step_name = <span class="str">'Ejecutar Backup'</span>,
    @command = <span class="str">'BACKUP DATABASE MiAppDB TO DISK=N''C:\Backups\MiAppDB.bak'' WITH INIT'</span>;

<span class="cm"># Agregar schedule (diario a las 2 AM):</span>
<span class="kw">EXEC</span> msdb.dbo.sp_add_schedule
    @schedule_name = <span class="str">'Diario2AM'</span>,
    @freq_type = 4,          <span class="cm">-- diario</span>
    @freq_interval = 1,       <span class="cm">-- cada 1 día</span>
    @active_start_time = 20000; <span class="cm">-- 02:00:00 (HHMMSS)</span>

<span class="cm"># Asociar schedule al job:</span>
<span class="kw">EXEC</span> msdb.dbo.sp_attach_schedule
    @job_name = <span class="str">'BackupDiario'</span>,
    @schedule_name = <span class="str">'Diario2AM'</span>;</pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">jobs</span>
            <h3>Gestionar Jobs desde SSMS</h3>
        </div>
        <pre><span class="cm"># Ruta en SSMS:</span>
<span class="cm"># SQL Server Agent → Jobs → New Job</span>

<span class="cm"># Pasos para crear un Job gráficamente:</span>
<span class="cm"># 1. General: nombre, propietario, categoría</span>
<span class="cm"># 2. Steps: agregar pasos (T-SQL, PowerShell, CmdExec, SSIS)</span>
<span class="cm"># 3. Schedules: definir frecuencia de ejecución</span>
<span class="cm"># 4. Alerts: configurar notificaciones</span>
<span class="cm"># 5. Notifications: email en éxito/fallo</span>

<span class="cm"># PowerShell: listar jobs del servidor</span>
<span class="fn">Invoke-Sqlcmd</span> -ServerInstance <span class="str">"localhost"</span> `
  -Query <span class="str">"SELECT name, enabled FROM msdb.dbo.sysjobs"</span>

<span class="cm"># Iniciar job manualmente</span>
<span class="kw">EXEC</span> msdb.dbo.sp_start_job @job_name = <span class="str">'BackupDiario'</span>;

<span class="cm"># Ver historial de ejecución</span>
<span class="kw">EXEC</span> msdb.dbo.sp_help_jobhistory @job_name = <span class="str">'BackupDiario'</span>;</pre>
    </div>
</section>

<!-- 09 – STORED PROCEDURES -->
<section class="section">
    <div class="section-header">
        <div class="section-num">09</div>
        <h2 class="section-title">Stored Procedures</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">SP</span>
            <h3>Crear y ejecutar procedimientos almacenados</h3>
        </div>
        <pre><span class="cm">-- Procedimiento simple sin parámetros</span>
<span class="kw">CREATE PROCEDURE</span> sp_listar_usuarios_activos
<span class="kw">AS</span>
<span class="kw">BEGIN</span>
    <span class="kw">SELECT</span> id, nombre, email, fecha_registro
    <span class="kw">FROM</span> usuarios
    <span class="kw">WHERE</span> activo = 1;
<span class="kw">END</span>;
<span class="kw">GO</span>

<span class="cm">-- Procedimiento con parámetros de entrada</span>
<span class="kw">CREATE PROCEDURE</span> sp_buscar_usuarios
    @ciudad <span class="kw">NVARCHAR</span>(50),
    @desde  <span class="kw">DATE</span> = <span class="kw">NULL</span>
<span class="kw">AS</span>
<span class="kw">BEGIN</span>
    <span class="kw">SELECT</span> nombre, email, ciudad, fecha_registro
    <span class="kw">FROM</span> usuarios
    <span class="kw">WHERE</span> ciudad = @ciudad
      <span class="kw">AND</span> (@desde <span class="kw">IS NULL OR</span> fecha_registro >= @desde)
    <span class="kw">ORDER BY</span> fecha_registro <span class="kw">DESC</span>;
<span class="kw">END</span>;
<span class="kw">GO</span>

<span class="cm">-- Ejecutar procedimientos</span>
<span class="kw">EXEC</span> sp_listar_usuarios_activos;
<span class="kw">EXEC</span> sp_buscar_usuarios @ciudad = <span class="str">'Bogotá'</span>;
<span class="kw">EXEC</span> sp_buscar_usuarios <span class="str">'Medellín'</span>, <span class="str">'2024-01-01'</span>;

<span class="cm">-- Procedimiento con parámetro de salida</span>
<span class="kw">CREATE PROCEDURE</span> sp_contar_usuarios
    @ciudad  <span class="kw">NVARCHAR</span>(50),
    @total   <span class="kw">INT OUTPUT</span>
<span class="kw">AS</span>
<span class="kw">BEGIN</span>
    <span class="kw">SELECT</span> @total = <span class="kw">COUNT</span>(*) <span class="kw">FROM</span> usuarios <span class="kw">WHERE</span> ciudad = @ciudad;
<span class="kw">END</span>;
<span class="kw">GO</span>

<span class="cm">-- Ejecutar con parámetro de salida</span>
<span class="kw">DECLARE</span> @resultado <span class="kw">INT</span>;
<span class="kw">EXEC</span> sp_contar_usuarios <span class="str">'Bogotá'</span>, @resultado <span class="kw">OUTPUT</span>;
<span class="kw">PRINT</span> @resultado;</pre>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        Los <strong>Stored Procedures</strong> mejoran el rendimiento (se compilan una vez), reducen el tráfico de red y encapsulan la lógica de negocio. Úsalos en lugar de consultas directas desde la aplicación cuando tengas operaciones complejas o repetitivas.
    </div>
</section>

<!-- 10 – CONEXIÓN CON PHP -->
<section class="section">
    <div class="section-header">
        <div class="section-num">10</div>
        <h2 class="section-title">Conexión con PHP (XAMPP)</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">PHP</span>
            <h3>Instalar extensión sqlsrv en XAMPP</h3>
        </div>
        <pre><span class="cm"># 1. Verificar versión de PHP</span>
<span class="fn">php</span> -v

<span class="cm"># 2. Descargar los DLLs desde Microsoft:</span>
<span class="cm"># https://docs.microsoft.com/sql/connect/php/download-drivers-php-sql-server</span>

<span class="cm"># 3. Elegir versión según PHP (ej: PHP 8.2 → SQLSRV 5.12)</span>
<span class="cm"># Descargar y extraer los archivos .dll</span>

<span class="cm"># 4. Copiar a la carpeta ext de XAMPP</span>
<span class="cm"># php_sqlsrv_82_ts.dll   →  C:\xampp\php\ext\</span>
<span class="cm"># php_pdo_sqlsrv_82_ts.dll → C:\xampp\php\ext\</span>

<span class="cm"># 5. Agregar en php.ini:</span>
<span class="kw">extension</span>=php_sqlsrv_82_ts.dll
<span class="kw">extension</span>=php_pdo_sqlsrv_82_ts.dll

<span class="cm"># 6. También necesitas ODBC Driver 17+:</span>
<span class="cm"># https://docs.microsoft.com/sql/connect/odbc/download-odbc-driver-for-sql-server</span>

<span class="cm"># 7. Reiniciar Apache y verificar:</span>
<span class="fn">php</span> -m | findstr sqlsrv</pre>
    </div>

    <div class="card card-sqlserver" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">code</span>
            <h3>Connection strings y consultas en PHP</h3>
        </div>
        <pre><span class="cm">// Conexión con SQL Server Authentication</span>
<span class="var">$server</span>   = <span class="str">"localhost"</span>;
<span class="var">$database</span> = <span class="str">"MiAppDB"</span>;
<span class="var">$username</span> = <span class="str">"sa"</span>;
<span class="var">$password</span> = <span class="str">"tu_password"</span>;

<span class="kw">try</span> {
    <span class="var">$conn</span> = <span class="kw">new</span> <span class="fn">PDO</span>(
        <span class="str">"sqlsrv:Server=$server;Database=$database"</span>,
        <span class="var">$username</span>,
        <span class="var">$password</span>
    );
    <span class="var">$conn</span>-><span class="fn">setAttribute</span>(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    <span class="kw">echo</span> <span class="str">"Conectado a SQL Server"</span>;
} <span class="kw">catch</span> (PDOException <span class="var">$e</span>) {
    <span class="kw">echo</span> <span class="str">"Error: "</span> . <span class="var">$e</span>-><span class="fn">getMessage</span>();
}

<span class="cm">// Consulta con parámetros preparados</span>
<span class="var">$stmt</span> = <span class="var">$conn</span>-><span class="fn">prepare</span>(<span class="str">"SELECT * FROM usuarios WHERE ciudad = ?"</span>);
<span class="var">$stmt</span>-><span class="fn">execute</span>([<span class="str">'Bogotá'</span>]);
<span class="var">$usuarios</span> = <span class="var">$stmt</span>-><span class="fn">fetchAll</span>(PDO::FETCH_ASSOC);

<span class="cm">// Conexión con Windows Authentication</span>
<span class="var">$conn</span> = <span class="kw">new</span> <span class="fn">PDO</span>(<span class="str">"sqlsrv:Server=$server;Database=$database;TrustServerCertificate=1"</span>);
<span class="cm">// O usando la función sqlsrv_connect (procedural)</span>
<span class="var">$conn</span> = <span class="fn">sqlsrv_connect</span>(<span class="var">$server</span>, [
    <span class="str">"Database"</span> => <span class="var">$database</span>,
    <span class="str">"UID"</span>      => <span class="var">$username</span>,
    <span class="str">"PWD"</span>      => <span class="var">$password</span>
]);</pre>
    </div>
</section>

<!-- 11 – CONEXIÓN CON R -->
<section class="section">
    <div class="section-header">
        <div class="section-num">11</div>
        <h2 class="section-title">Conexión con R</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">R</span>
            <h3>Conectar R con SQL Server</h3>
        </div>
        <pre><span class="cm"># Instalar paquetes necesarios</span>
<span class="fn">install.packages</span>(<span class="str">"odbc"</span>)
<span class="fn">install.packages</span>(<span class="str">"DBI"</span>)

<span class="cm"># Cargar librerías</span>
<span class="fn">library</span>(DBI)
<span class="fn">library</span>(odbc)

<span class="cm"># Conectar con Windows Authentication</span>
<span class="var">con</span> <- <span class="fn">dbConnect</span>(
  <span class="fn">odbc</span>(),
  Driver = <span class="str">"ODBC Driver 17 for SQL Server"</span>,
  Server = <span class="str">"localhost"</span>,
  Database = <span class="str">"MiAppDB"</span>,
  Trusted_Connection = <span class="str">"yes"</span>
)

<span class="cm"># Conectar con SQL Authentication</span>
<span class="var">con</span> <- <span class="fn">dbConnect</span>(
  <span class="fn">odbc</span>(),
  Driver = <span class="str">"ODBC Driver 17 for SQL Server"</span>,
  Server = <span class="str">"localhost"</span>,
  Database = <span class="str">"MiAppDB"</span>,
  UID = <span class="str">"sa"</span>,
  PWD = <span class="str">"tu_password"</span>
)

<span class="cm"># Consultas con DBI</span>
<span class="var">usuarios</span> <- <span class="fn">dbGetQuery</span>(con, <span class="str">"SELECT * FROM usuarios WHERE activo = 1"</span>)
<span class="fn">head</span>(usuarios)

<span class="cm"># Ejecutar consultas parametrizadas</span>
<span class="var">ciudad</span> <- <span class="str">"Bogotá"</span>
<span class="var">result</span> <- <span class="fn">dbGetQuery</span>(con, <span class="str">"SELECT * FROM usuarios WHERE ciudad = ?"</span>,
                      params = <span class="fn">list</span>(ciudad))

<span class="cm"># Ver tablas disponibles</span>
<span class="fn">dbListTables</span>(con)

<span class="cm"># Cerrar conexión</span>
<span class="fn">dbDisconnect</span>(con)</pre>
    </div>
</section>

<!-- 12 – TROUBLESHOOTING -->
<section class="section">
    <div class="section-header">
        <div class="section-num">12</div>
        <h2 class="section-title">Troubleshooting</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge b-red">errores</span>
            <h3>Problemas comunes</h3>
        </div>
        <pre><span class="cm"># Error: "Cannot connect to localhost:1433"</span>
<span class="cm"># Causa: TCP/IP no habilitado o puerto bloqueado</span>
<span class="cm"># Solución: Habilitar TCP/IP en Configuration Manager</span>
<span class="cm"># Verificar puerto con:</span>
<span class="fn">Test-NetConnection</span> localhost -Port 1433

<span class="cm"># Error: "Login failed for user 'sa'"</span>
<span class="cm"># Causa: Autenticación SQL no habilitada o password incorrecto</span>
<span class="cm"># Solución: SSMS → Server Properties → Security → Mixed Mode</span>
<span class="cm"># Security → Logins → sa → Status → Login: Enabled</span>

<span class="cm"># Error: "SSL Provider: The certificate chain..."</span>
<span class="cm"># Solución: Agregar TrustServerCertificate=1 al connection string</span>
<span class="cm"># O instalar certificado SSL válido</span>

<span class="cm"># Error: "ODBC Driver 17 for SQL Server not found"</span>
<span class="cm"># Solución: Instalar ODBC Driver desde Microsoft</span>
<span class="cm"># https://aka.ms/downloadmsodbcsql</span>

<span class="cm"># Error: "Named Pipes Provider: error 40"</span>
<span class="cm"># Causa: Servicio de SQL Server no está corriendo</span>
<span class="cm"># Solución: Services → SQL Server → Start</span>
<span class="fn">Start-Service</span> MSSQLSERVER

<span class="cm"># Error: "php_sqlsrv.dll not found" en XAMPP</span>
<span class="cm"># Solución: Verificar que el DLL corresponde a la versión de PHP</span>
<span class="cm"># PHP 8.2 → sqlsrv 5.12 (php_sqlsrv_82_ts.dll)</span>
<span class="cm"># PHP 8.1 → sqlsrv 5.11 (php_sqlsrv_81_ts.dll)</span>

<span class="cm"># Error: SQL Server Agent no aparece en SSMS</span>
<span class="cm"># Solución: Express Edition no incluye SQL Server Agent</span>
<span class="cm"># Usar Developer Edition (gratis) para funcionalidad completa</span></pre>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        La <strong>Developer Edition</strong> de SQL Server es gratis y tiene <strong>todas las funcionalidades</strong> (Agent, Reporting, Integration Services, etc.). Descárgala desde <code>https://www.microsoft.com/sql-server/sql-server-downloads</code>. Es idéntica a Enterprise pero con licencia solo para desarrollo y testing.
    </div>
</section>

<!-- 13 – MEJORES PRÁCTICAS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">13</div>
        <h2 class="section-title">Mejores prácticas</h2>
    </div>

    <div class="card card-sqlserver">
        <div class="card-head">
            <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">tips</span>
            <h3>Consejos de uso</h3>
        </div>
        <pre><span class="cm"># 1. Usa NVARCHAR para texto que pueda tener caracteres Unicode</span>
<span class="cm">#    VARCHAR solo para ASCII (inglés sin acentos)</span>

<span class="cm"># 2. Siempre usa parámetros preparados (previene SQL Injection)</span>
<span class="cm">#    Nunca concatenes strings para crear consultas</span>

<span class="cm"># 3. Crea índices en columnas de búsqueda frecuente</span>
<span class="kw">CREATE NONCLUSTERED INDEX</span> IX_email
<span class="kw">ON</span> usuarios (email)
<span class="kw">INCLUDE</span> (nombre);  <span class="cm">-- covered index: evita ir a la tabla</span>

<span class="cm"># 4. Haz backups regulares</span>
<span class="kw">BACKUP DATABASE</span> MiAppDB
<span class="kw">TO DISK</span> = <span class="str">'C:\Backups\MiAppDB_FULL.bak'</span>
<span class="kw">WITH INIT</span>, <span class="kw">CHECKSUM</span>, <span class="kw">COMPRESSION</span>;

<span class="cm"># 5. Usa transacciones para operaciones que modifican múltiples tablas</span>
<span class="kw">BEGIN TRANSACTION</span>;
  <span class="kw">UPDATE</span> cuentas <span class="kw">SET</span> saldo = saldo - 100 <span class="kw">WHERE</span> id = 1;
  <span class="kw">UPDATE</span> cuentas <span class="kw">SET</span> saldo = saldo + 100 <span class="kw">WHERE</span> id = 2;
<span class="kw">IF @@ERROR</span> = 0 <span class="kw">COMMIT</span>; <span class="kw">ELSE ROLLBACK</span>;

<span class="cm"># 6. Monitorea el rendimiento con DMVs</span>
<span class="kw">SELECT TOP 10</span> total_worker_time/execution_count <span class="kw">AS</span> avg_cpu,
       execution_count, text
<span class="kw">FROM</span> sys.dm_exec_query_stats
<span class="kw">CROSS APPLY</span> sys.dm_exec_sql_text(sql_handle)
<span class="kw">ORDER BY</span> avg_cpu <span class="kw">DESC</span>;

<span class="cm"># 7. Usa schemas para organizar objetos</span>
<span class="kw">CREATE SCHEMA</span> ventas;
<span class="kw">CREATE SCHEMA</span> rrhh;
<span class="kw">CREATE TABLE</span> ventas.clientes (...);

<span class="cm"># 8. Siempre especifica el schema en tus consultas</span>
<span class="kw">SELECT</span> * <span class="kw">FROM</span> ventas.clientes;  <span class="cm">-- bueno</span>
<span class="kw">SELECT</span> * <span class="kw">FROM</span> clientes;         <span class="cm">-- evita esto</span></pre>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>