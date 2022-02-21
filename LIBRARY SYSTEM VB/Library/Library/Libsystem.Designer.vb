<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class frmLib
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        If disposing AndAlso components IsNot Nothing Then
            components.Dispose()
        End If
        MyBase.Dispose(disposing)
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.components = New System.ComponentModel.Container
        Me.Label1 = New System.Windows.Forms.Label
        Me.Label2 = New System.Windows.Forms.Label
        Me.Label3 = New System.Windows.Forms.Label
        Me.Label4 = New System.Windows.Forms.Label
        Me.Label5 = New System.Windows.Forms.Label
        Me.Label6 = New System.Windows.Forms.Label
        Me.Label7 = New System.Windows.Forms.Label
        Me.txtName = New System.Windows.Forms.TextBox
        Me.txtBkBrwed = New System.Windows.Forms.TextBox
        Me.txtISBN = New System.Windows.Forms.TextBox
        Me.txtAuthor = New System.Windows.Forms.TextBox
        Me.txtDateB = New System.Windows.Forms.TextBox
        Me.txtDueD = New System.Windows.Forms.TextBox
        Me.Adodc1 = New Microsoft.VisualBasic.Compatibility.VB6.ADODC
        Me.LibInfoBindingSource = New System.Windows.Forms.BindingSource(Me.components)
        Me.Libsystem1DataSet = New Library.Libsystem1DataSet
        Me.LibInfoTableAdapter = New Library.Libsystem1DataSetTableAdapters.LibInfoTableAdapter
        CType(Me.LibInfoBindingSource, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.Libsystem1DataSet, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(63, 64)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(35, 13)
        Me.Label1.TabIndex = 0
        Me.Label1.Text = "Name"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(63, 100)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(80, 13)
        Me.Label2.TabIndex = 1
        Me.Label2.Text = "Book Borrowed"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(63, 137)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(32, 13)
        Me.Label3.TabIndex = 2
        Me.Label3.Text = "ISBN"
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(63, 177)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(38, 13)
        Me.Label4.TabIndex = 3
        Me.Label4.Text = "Author"
        '
        'Label5
        '
        Me.Label5.AutoSize = True
        Me.Label5.Location = New System.Drawing.Point(63, 214)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(78, 13)
        Me.Label5.TabIndex = 4
        Me.Label5.Text = "Date Borrowed"
        '
        'Label6
        '
        Me.Label6.AutoSize = True
        Me.Label6.Location = New System.Drawing.Point(63, 251)
        Me.Label6.Name = "Label6"
        Me.Label6.Size = New System.Drawing.Size(53, 13)
        Me.Label6.TabIndex = 5
        Me.Label6.Text = "Due Date"
        '
        'Label7
        '
        Me.Label7.AutoSize = True
        Me.Label7.Location = New System.Drawing.Point(34, 22)
        Me.Label7.Name = "Label7"
        Me.Label7.Size = New System.Drawing.Size(88, 13)
        Me.Label7.TabIndex = 6
        Me.Label7.Text = "Library Borrowers"
        '
        'txtName
        '
        Me.txtName.DataBindings.Add(New System.Windows.Forms.Binding("Text", Me.LibInfoBindingSource, "BName", True))
        Me.txtName.Location = New System.Drawing.Point(271, 64)
        Me.txtName.Name = "txtName"
        Me.txtName.Size = New System.Drawing.Size(100, 20)
        Me.txtName.TabIndex = 7
        '
        'txtBkBrwed
        '
        Me.txtBkBrwed.DataBindings.Add(New System.Windows.Forms.Binding("Text", Me.LibInfoBindingSource, "Book Title", True))
        Me.txtBkBrwed.Location = New System.Drawing.Point(271, 100)
        Me.txtBkBrwed.Name = "txtBkBrwed"
        Me.txtBkBrwed.Size = New System.Drawing.Size(100, 20)
        Me.txtBkBrwed.TabIndex = 8
        '
        'txtISBN
        '
        Me.txtISBN.DataBindings.Add(New System.Windows.Forms.Binding("Text", Me.LibInfoBindingSource, "ISBN", True))
        Me.txtISBN.Location = New System.Drawing.Point(271, 137)
        Me.txtISBN.Name = "txtISBN"
        Me.txtISBN.Size = New System.Drawing.Size(100, 20)
        Me.txtISBN.TabIndex = 9
        '
        'txtAuthor
        '
        Me.txtAuthor.DataBindings.Add(New System.Windows.Forms.Binding("Text", Me.LibInfoBindingSource, "Author", True))
        Me.txtAuthor.Location = New System.Drawing.Point(271, 177)
        Me.txtAuthor.Name = "txtAuthor"
        Me.txtAuthor.Size = New System.Drawing.Size(100, 20)
        Me.txtAuthor.TabIndex = 10
        '
        'txtDateB
        '
        Me.txtDateB.DataBindings.Add(New System.Windows.Forms.Binding("Text", Me.LibInfoBindingSource, "Date Borrowed", True))
        Me.txtDateB.Location = New System.Drawing.Point(271, 211)
        Me.txtDateB.Name = "txtDateB"
        Me.txtDateB.Size = New System.Drawing.Size(100, 20)
        Me.txtDateB.TabIndex = 11
        '
        'txtDueD
        '
        Me.txtDueD.DataBindings.Add(New System.Windows.Forms.Binding("Text", Me.LibInfoBindingSource, "Due Date", True))
        Me.txtDueD.Location = New System.Drawing.Point(271, 251)
        Me.txtDueD.Name = "txtDueD"
        Me.txtDueD.Size = New System.Drawing.Size(100, 20)
        Me.txtDueD.TabIndex = 12
        '
        'Adodc1
        '
        Me.Adodc1.BackColor = System.Drawing.SystemColors.Control
        Me.Adodc1.BOFAction = Microsoft.VisualBasic.Compatibility.VB6.ADODC.BOFActionEnum.adDoMoveFirst
        Me.Adodc1.CommandTimeout = 0
        Me.Adodc1.CommandType = ADODB.CommandTypeEnum.adCmdUnknown
        Me.Adodc1.ConnectionString = Nothing
        Me.Adodc1.CursorLocation = ADODB.CursorLocationEnum.adUseClient
        Me.Adodc1.CursorType = ADODB.CursorTypeEnum.adOpenStatic
        Me.Adodc1.EOFAction = Microsoft.VisualBasic.Compatibility.VB6.ADODC.EOFActionEnum.adDoMoveLast
        Me.Adodc1.Location = New System.Drawing.Point(166, 295)
        Me.Adodc1.LockType = ADODB.LockTypeEnum.adLockOptimistic
        Me.Adodc1.Mode = ADODB.ConnectModeEnum.adModeUnknown
        Me.Adodc1.Name = "Adodc1"
        Me.Adodc1.Orientation = Microsoft.VisualBasic.Compatibility.VB6.ADODC.OrientationEnum.adHorizontal
        Me.Adodc1.RecordSource = "LibInfo"
        Me.Adodc1.Size = New System.Drawing.Size(164, 26)
        Me.Adodc1.TabIndex = 13
        Me.Adodc1.Text = "Borrowers"
        '
        'LibInfoBindingSource
        '
        Me.LibInfoBindingSource.DataMember = "LibInfo"
        Me.LibInfoBindingSource.DataSource = Me.Libsystem1DataSet
        '
        'Libsystem1DataSet
        '
        Me.Libsystem1DataSet.DataSetName = "Libsystem1DataSet"
        Me.Libsystem1DataSet.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema
        '
        'LibInfoTableAdapter
        '
        Me.LibInfoTableAdapter.ClearBeforeFill = True
        '
        'frmLib
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(571, 333)
        Me.Controls.Add(Me.Adodc1)
        Me.Controls.Add(Me.txtDueD)
        Me.Controls.Add(Me.txtDateB)
        Me.Controls.Add(Me.txtAuthor)
        Me.Controls.Add(Me.txtISBN)
        Me.Controls.Add(Me.txtBkBrwed)
        Me.Controls.Add(Me.txtName)
        Me.Controls.Add(Me.Label7)
        Me.Controls.Add(Me.Label6)
        Me.Controls.Add(Me.Label5)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Name = "frmLib"
        Me.Text = "Library System"
        CType(Me.LibInfoBindingSource, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.Libsystem1DataSet, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents Label1 As System.Windows.Forms.Label
    Friend WithEvents Label2 As System.Windows.Forms.Label
    Friend WithEvents Label3 As System.Windows.Forms.Label
    Friend WithEvents Label4 As System.Windows.Forms.Label
    Friend WithEvents Label5 As System.Windows.Forms.Label
    Friend WithEvents Label6 As System.Windows.Forms.Label
    Friend WithEvents Label7 As System.Windows.Forms.Label
    Friend WithEvents txtName As System.Windows.Forms.TextBox
    Friend WithEvents txtBkBrwed As System.Windows.Forms.TextBox
    Friend WithEvents txtISBN As System.Windows.Forms.TextBox
    Friend WithEvents txtAuthor As System.Windows.Forms.TextBox
    Friend WithEvents txtDateB As System.Windows.Forms.TextBox
    Friend WithEvents txtDueD As System.Windows.Forms.TextBox
    Friend WithEvents Adodc1 As Microsoft.VisualBasic.Compatibility.VB6.ADODC
    Friend WithEvents Libsystem1DataSet As Library.Libsystem1DataSet
    Friend WithEvents LibInfoBindingSource As System.Windows.Forms.BindingSource
    Friend WithEvents LibInfoTableAdapter As Library.Libsystem1DataSetTableAdapters.LibInfoTableAdapter

End Class
