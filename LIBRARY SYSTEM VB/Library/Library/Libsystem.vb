Public Class frmLib

    Private Sub frmLib_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        'TODO: This line of code loads data into the 'Libsystem1DataSet.LibInfo' table. You can move, or remove it, as needed.
        Me.LibInfoTableAdapter.Fill(Me.Libsystem1DataSet.LibInfo)
        'TODO: This line of code loads data into the 'Libsystem1DataSet.LibInfo' table. You can move, or remove it, as needed.
        Me.LibInfoTableAdapter.Fill(Me.Libsystem1DataSet.LibInfo)
        'TODO: This line of code loads data into the 'Libsystem1DataSet.Borrowers' table. You can move, or remove it, as needed.
        Me.LibInfoTableAdapter.Fill(Me.Libsystem1DataSet.LibInfo)

    End Sub
End Class
