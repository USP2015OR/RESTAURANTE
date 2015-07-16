<script>
    busca_mesa2();
</script>
<form id="frm_me" name="frm_me" class="form-vertical">
                            <center>
                                <table class="table">
                                    <tr>
                                    <td>
                                        <label for="cbonivel">Nivel:</label>
                                    </td>
                                    <td>
                                        <SELECT id="cbonivel" NAME="cbonivel" class="form-control" onchange="busca_mesa2();"> 
                                            <OPTION VALUE="1">1</OPTION>
                                            <OPTION VALUE="2">2</OPTION>
                                            <OPTION VALUE="3">3</OPTION>
                                        </SELECT>
                                    </td>
                                    <td>
                                        <label for="cbozona">Zona:</label>
                                    </td>
                                    <td>
                                        <SELECT id="cbozona" NAME="cbozona" class="form-control" onchange="busca_mesa2();"> 
                                            <OPTION VALUE="A">A</OPTION>
                                            <OPTION VALUE="B">B</OPTION>
                                            <OPTION VALUE="C">C</OPTION>
                                        </SELECT>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="4">
                                        <div id="buscamesa">
                                            
                                        </div>
                                    </td>
                                    </tr>
                                </table>
                            </center>
                        </form>