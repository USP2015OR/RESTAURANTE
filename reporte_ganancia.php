<script>
   rep_ganancia();
</script>
<form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input  type="number" name="txtaño" min="2000"  value="2015" id="txtaño" onkeypress="return soloNumeros(event);" class="form-control" onkeyup="rep_ganancia()" onchange="rep_ganancia()">
                                    </td>
                                    <td>
                                        <SELECT id="cbomes" NAME="cbomes" class="form-control" onchange="   rep_ganancia();"> 
                                            <OPTION VALUE="0">Todos</OPTION>
                                            <OPTION VALUE="1">Enero</OPTION>
                                            <OPTION VALUE="2">Febrero</OPTION>
                                            <OPTION VALUE="3">Marzo</OPTION>
                                            <OPTION VALUE="4">Abril</OPTION>
                                            <OPTION VALUE="5">Mayo</OPTION>
                                            <OPTION VALUE="6">Junio</OPTION>
                                            <OPTION VALUE="7">Julio</OPTION>
                                            <OPTION VALUE="8">Agosto</OPTION>
                                            <OPTION VALUE="9">Setiembre</OPTION>
                                            <OPTION VALUE="10">Octubre</OPTION>
                                            <OPTION VALUE="11">Nomviembre</OPTION>
                                            <OPTION VALUE="12">Diciembre</OPTION>
                                        </SELECT>
                                    </td>
                                    <td>
                                        <input type="number" name="txtdia" min="1" max="31"  value="1" id="txtdia" onkeypress="return soloNumeros(event);" class="form-control" onkeyup="rep_ganancia()" onchange="rep_ganancia()">
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="3">
                                        <div id="buscomanda">
                                            
                                        </div>
                                    </td>
                                    </tr>
                                </table>
            </center>
</form>