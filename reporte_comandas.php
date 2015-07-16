<script>
    busca_comanda2();
</script>
<form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td width="400">
                                        <input type="text" name="txtbusc" maxlength="50"  id="txtbusc" class="form-control" placeholder="Nombre" onkeyup="busca_comanda2();">
                                    </td>
                                    <td width="200">
                                        <SELECT id="cbocategoria" NAME="cbocategoria" class="form-control" onchange="busca_comanda2();"> 
                                            <OPTION VALUE="1">Bebida</OPTION>
                                            <OPTION VALUE="2">Sopa</OPTION>
                                            <OPTION VALUE="3">Postre</OPTION>
                                            <OPTION VALUE="4">Segundo</OPTION>
                                        </SELECT>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2" width="600">
                                        <div id="buscomanda">
                                            
                                        </div>
                                    </td>
                                    </tr>
                                </table>
                            </center>
                        </form>