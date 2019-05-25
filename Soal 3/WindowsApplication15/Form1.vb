Public Class Form1
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click


        Dim kata1, kata2 As Double
        kata1 = "Peserta"
        kata2 = "Arkademy"
        Dim jumlahkata1, jumlahkata2
        jumlahkata1 = 1
        jumlahkata2 = 1
        For I = 1 To Len(Trim$(kata1))
            If Asc(Mid(kata1, I, 1)) = 13 Or Asc(Mid(kata1, I, 1)) = 32 Then
                jumlahkata1 = jumlahkata1 + 1
                jumlahkata2 = jumlahkata2 + 1
            End If
        Next I
        Dim hasil1, hasil2, tampil1, tampil2
        hasil2 = jumlahkata2
        hasil1 = jumlahkata1
        tampil1 = kata1
        tampil2 = kata2
        Label1.Text = tampil1
        Label2.Text = tampil2
        TextBox1.Text = kata1 + hasil1
        TextBox2.Text = kata2 + hasil2
    End Sub

End Class