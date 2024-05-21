<script src="https://cdn.tailwindcss.com"></script>
<div className="container mx-auto overflow-x-auto border-x border-t my-10">
        <table className="table-auto w-full">
          <thead className="border-b">
            <tr
              className="text-white font-bold h-10"
            >
              <th className="text-center md:p-4 p-0 md:w-32 w-10 border-r border-gray-300">
                Subject Code
              </th>
              <th className="text-center md:p-4 p-0 md:w-96 w-none ">
                Subject Name
              </th>
              <th
                colSpan={3}
                className="text-center p-4 border border-t-0 border-gray-300"
              >
                Marks
              </th>
              <th className="text-center md:p-4 p-0 md:w-32 w-10 border-r border-gray-300">
                Grade
              </th>
            </tr>
            <tr
              className="border-b border-gray-400 font-bold h-10 text-white"
            >
              <th className="text-center p-4 border-r text-base"></th>
              <th className="text-center p-4"></th>
              <th className="text-center p-4 border ">Theory</th>
              <th className="text-center p-4 border ">MCQ</th>
              <th className="text-center p-4 border ">Total</th>
              <th className="text-center p-4"></th>
            </tr>
          </thead>
          <tbody>
            <tr className="hover:bg-gray-50 text-center border-b-0 border-b-none h-10">
              <td className="p-0 border-l border-r">001</td>
              <td className="p-0 border-l border-r">English 1</td>
              <td className="p-0 border-l border-r">40</td>
              <td className="p-0 border-l border-r">40</td>
              <td className="p-0 border-l border-r"></td>
              <td className="p-0 border-l border-r"></td>
            </tr>
            <tr className="border -b border-t-0 hover:bg-gray-50 text-center h-10">
              <td className="p-0 border-l border-r">001</td>
              <td className="p-0 border-l border-r">English 1</td>
              <td className="p-0 border-l border-r">40</td>
              <td className="p-0 border-l border-r">40</td>
              <td className="p-0 border-l border-r">80</td>
              <td className="p-0 border-l border-r">A+</td>
            </tr>
            <tr className="border-b hover:bg-gray-50 text-center h-10">
              <td className="p-4 border">001</td>
              <td className="p-4 border">English 1</td>
              <td className="p-4 border">40</td>
              <td className="p-4 border">40</td>
              <td className="p-4 border"></td>
              <td className="p-4 border">A+</td>
            </tr>
          </tbody>
        </table>
      </div>